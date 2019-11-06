<?php 

	// Start Sesson
	session_start();

	// Unset Error Message
	unset($_SESSION["errorMessage"]);

	// Include phpLibs
	include("includes/phpLibs.html");

	// Open Database Connection
	include("includes/openDBConn.php");

	// Sanitize inputs using mysqli::real_escape_string
	foreach ($_POST as $key => $value) {
		$_POST[$key] = $conn->real_escape_string($value);
	}

	// Check for existing username
	$sql = "SELECT Username FROM Users WHERE Username=\"" . $_POST['username'] . "\"";
	$results = $conn->query($sql);
	

	// Redirect and set error message if user doesn't exist
	if($results->num_rows <= 0){
		$_SESSION['errorMessage'] = "Username or password incorrect. Try again.";
		header("Location:login.php?username");
		exit;
	}

	// Check for matching password
	$sql = "SELECT Username FROM Users WHERE Username=\"" . $_POST['username'] . "\" AND Password=\"" . $_POST['password'] . "\"";
	$results = $conn->query($sql);

	// Redirect and set error message if password doesn't match
	if($results->num_rows <= 0){
		$_SESSION['errorMessage'] = "Username or password incorrect. Try again.";
		header("Location:login.php?password");
		exit;
	}

	// Set temporary username to carry across session recreation
	$username = $_POST['username'];

	// Destroy Session
	foreach ($_SESSION as $key => $value) {
		$_SESSION[$key] = "";
	}
	session_unset();
	session_destroy();

	// Recreate Session
	session_start();
	
	/*
	 * Create multidimensional array to hold data from various tables
	 */

	// Set $_SESSION['username']
	setSessionVariable("username", $username);


	// Select all but username and password from Users
	$sql = "SELECT `firstName`, `lastName`, `email`, `phone` FROM `Users` WHERE `username` = '" . returnSessionVariable("username") . "'";
	$result = $conn->query($sql);

	// Move data into session variables
	for($i = 1; $i <= $result->num_rows; $i++){
		$row = $result->fetch_assoc();
		foreach ($row as $key => $value) {
			setSessionVariable($key, $value);
		}
	}

	// Select all but username from Billing
	$sql = "SELECT `cardNumber`, `cardType`, `cardExpirationMonth`, `cardExpirationYear`, `cardCVV`, ";
	$sql = $sql . "`billingFirstName`, `billingLastName`, `billingStreet`, `billingCity`, `billingState`, `billingZip` FROM `Billing` ";
	$sql = $sql . "WHERE username='" . returnSessionVariable("username") . "'";
	$result = $conn->query($sql);

	// Move data into session variables
	for($i = 0; $i < $result->num_rows; $i++){
		$row = $result->fetch_assoc();
		foreach ($row as $key => $value) {
			$_SESSION['billing'][$i][$key] = $value;
		}
	}

	// Select all but username from Billing
	$sql = "SELECT `shippingFirstName`, `shippingLastName`, `shippingStreet`, `shippingCity`, `shippingState`, `shippingZip` FROM `Shipping` ";
	$sql = $sql . "WHERE username='" . returnSessionVariable("username") . "'";
	$result = $conn->query($sql);

	// Move data into session variables
	for($i = 0; $i < $result->num_rows; $i++){
		$row = $result->fetch_assoc();
		foreach ($row as $key => $value) {
			$_SESSION['shipping'][$i][$key] = $value;
		}
	}

	// Set Logged In Cariable
	setSessionVariable("loggedIN", true);

	// Redirect to Account Information
	header("Location:accountInfo.php");

?>