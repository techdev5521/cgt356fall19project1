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
	$sql = "UPDATE `Billing` SET ";
	$sql = $sql . "`cardType` = '" . $_POST['cardType'] . "'";
	$sql = $sql . ", `cardExpirationMonth` = '" . $_POST['cardExpirationMonth'] . "'";
	$sql = $sql . ", `cardExpirationYear` = '" . $_POST['cardExpirationYear'] . "'";
	$sql = $sql . ", `cardCVV` = '" . $_POST['cardCVV'] . "'";
	$sql = $sql . ", `billingFirstName` = '" . $_POST['billingFirstName'] . "'";
	$sql = $sql . ", `billingLastName` = '" . $_POST['billingLastName'] . "'";
	$sql = $sql . ", `billingStreet` = '" . $_POST['billingStreet'] . "'";
	$sql = $sql . ", `billingCity` = '" . $_POST['billingCity'] . "'";
	$sql = $sql . ", `billingState` = '" . $_POST['billingState'] . "'";
	$sql = $sql . ", `billingZip` = '" . $_POST['billingZip'] . "'";
	$sql = $sql . " WHERE `Billing`.`cardNumber` = " . $_POST['cardNumber'] . ";";
	$result = $conn->query($sql);

	// CLose Database Connection
	include("includes/closeDBConn.php");

	// Set success message
	setSessionVariable("successMessage", "You billing information was updated successfully.");

	// Redirect to Account Information
	header("Location:accountInfo.php");

?>