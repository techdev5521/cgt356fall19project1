<?php 

	// Start Sesson
	session_start();

	// Unset Error Message
	unset($_SESSION["errorMessage"]);

	// Include phpLibs
	include("includes/phpLibs.html");

	// Validate Data

	foreach($_POST as $fieldName => $fieldValue) {
		if(substr($fieldName, 0, 8) != "shipping"){
			if(empty($fieldValue)){
				setSessionVariable("errorMessage","Please fill out {$fieldName}");
				header("Location:signup.php?emptyField={$fieldName}");
				exit;
			}
		}
	}

	// Copy all values from $_POST to $_SESSION
	foreach ($_POST as $fieldName => $fieldValue) {
			$_SESSION[$fieldName] = $fieldValue;
	}

	// Open Database Connection
	include("includes/openDBConn.php");

	// Check for existing username
	$sql = "SELECT Username FROM Users WHERE Username=\"" . returnSessionVariable("username") . "\"";
	$results = $conn->query($sql);

	// Redirect and set error message if user exists
	if($results->num_rows > 0){
		$_SESSION['errorMessage'] = "That username is already taken.";
		header("Location:signup.php");
		exit;
	}

	// Create user in Users table
	$sql = "INSERT INTO `Users` (`firstName`, `lastName`, `email`, `phone`, `username`, `password`) ";
	$sql = $sql . "VALUES ('";
	$sql = $sql . returnSessionVariable("firstName");
	$sql = $sql . "', '" . returnSessionVariable("lastName");
	$sql = $sql . "', '" . returnSessionVariable("email");
	$sql = $sql . "', '" . returnSessionVariable("phone");
	$sql = $sql . "', '" . returnSessionVariable("username");
	$sql = $sql . "', '" . returnSessionVariable("password");
	$sql = $sql . "')";
	$result = $conn->query($sql);

	// Create billing netry
	$sql = "INSERT INTO `Billing` (`cardNumber`, `username`, `cardType`, `cardExpirationMonth`, `cardExpirationYear`, `cardCVV`";
	$sql = $sql . ", `billingFirstName`, `billingLastName`, `billingStreet`, `billingCity`, `billingState`, `billingZip`) ";
	$sql = $sql . "VALUES ('";
	$sql = $sql . returnSessionVariable("cardNumber");
	$sql = $sql . "', '" . returnSessionVariable("username");
	$sql = $sql . "', '" . returnSessionVariable("cardType");
	$sql = $sql . "', '" . returnSessionVariable("cardExpirationMonth");
	$sql = $sql . "', '" . returnSessionVariable("cardExpirationYear");
	$sql = $sql . "', '" . returnSessionVariable("cardCVV");
	$sql = $sql . "', '" . returnSessionVariable("billingFirstName");
	$sql = $sql . "', '" . returnSessionVariable("billingLastName");
	$sql = $sql . "', '" . returnSessionVariable("billingStreet");
	$sql = $sql . "', '" . returnSessionVariable("billingCity");
	$sql = $sql . "', '" . returnSessionVariable("billingState");
	$sql = $sql . "', '" . returnSessionVariable("billingZip");
	$sql = $sql . "')";
	$result = $conn->query($sql);

	// Check if shipping information is presnet
	$shippingInfoPresent = true;

	foreach($_SESSION as $fieldName => $fieldValue) {
		if(substr($fieldName, 0, 8) == "shipping" && empty($fieldValue)){
			$shippingInfoPresent = false;
			break;
		}
	}

	// Create shipping entry if present
	if ($shippingInfoPresent) {
		$sql = "INSERT INTO `Shipping` (`ID`, `username`, `shippingFirstName`, `shippingLastName`, `shippingStreet`, `shippingCity`, `shippingState`, `shippingZip`) ";
		$sql = $sql . "VALUES ('";
		$sql = $sql . returnSessionVariable("ID");
		$sql = $sql . "', '" . returnSessionVariable("username");
		$sql = $sql . "', '" . returnSessionVariable("shippingFirstName");
		$sql = $sql . "', '" . returnSessionVariable("shippingLastName");
		$sql = $sql . "', '" . returnSessionVariable("shippingStreet");
		$sql = $sql . "', '" . returnSessionVariable("shippingCity");
		$sql = $sql . "', '" . returnSessionVariable("shippingState");
		$sql = $sql . "', '" . returnSessionVariable("shippingZip");
		$sql = $sql . "')";
		$result = $conn->query($sql);
	}


	// Close database connection
	include("includes/closeDBConn.php");

	// Set temporary username variable for redirect
	$username = returnSessionVariable("username");

	// Destroy Session
	destroySession();

	// Redirect to Login page
	header("Location:login.php?signupSuccessful=true&username=" . $username);

?>