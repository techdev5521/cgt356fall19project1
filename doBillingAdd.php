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

	// Perform Update
	$sql = "INSERT INTO `Billing` ";
	$sql = $sql . "(`cardNumber`";
	$sql = $sql . ", `username`";
	$sql = $sql . ", `cardType`";
	$sql = $sql . ", `cardExpirationMonth`";
	$sql = $sql . ", `cardExpirationYear`";
	$sql = $sql . ", `cardCVV`";
	$sql = $sql . ", `billingFirstName`";
	$sql = $sql . ", `billingLastName`";
	$sql = $sql . ", `billingStreet`";
	$sql = $sql . ", `billingCity`";
	$sql = $sql . ", `billingState`";
	$sql = $sql . ", `billingZip`) ";
	$sql = $sql . "VALUES (";
	$sql = $sql . "'" . $_POST['cardNumber'] . "', ";
	$sql = $sql . "'" . returnSessionVariable("username") . "', ";
	$sql = $sql . "'" . $_POST['cardType'] . "', ";
	$sql = $sql . "'" . $_POST['cardExpirationMonth'] . "', ";
	$sql = $sql . "'" . $_POST['cardExpirationYear'] . "', ";
	$sql = $sql . "'" . $_POST['cardCVV'] . "', ";
	$sql = $sql . "'" . $_POST['billingFirstName'] . "', ";
	$sql = $sql . "'" . $_POST['billingLastName'] . "', ";
	$sql = $sql . "'" . $_POST['billingStreet'] . "', ";
	$sql = $sql . "'" . $_POST['billingCity'] . "', ";
	$sql = $sql . "'" . $_POST['billingState'] . "', ";
	$sql = $sql . "'" . $_POST['billingZip'] . "')";
	echo $sql;
	$result = $conn->query($sql);

	// CLose Database Connection
	include("includes/closeDBConn.php");

	// Set success message
	setSessionVariable("successMessage", "You billing information was added successfully.");

	// Redirect to Account Information
	header("Location:accountInfo.php");

?>