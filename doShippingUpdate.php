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
	$sql = "UPDATE `Shipping` SET ";
	$sql = $sql . "`shippingFirstName` = '" . $_POST['shippingFirstName'] . "'";
	$sql = $sql . ", `shippingLastName` = '" . $_POST['shippingLastName'] . "'";
	$sql = $sql . ", `shippingStreet` = '" . $_POST['shippingStreet'] . "'";
	$sql = $sql . ", `shippingCity` = '" . $_POST['shippingCity'] . "'";
	$sql = $sql . ", `shippingState` = '" . $_POST['shippingState'] . "'";
	$sql = $sql . ", `shippingZip` = '" . $_POST['shippingZip'] . "'";
	$sql = $sql . " WHERE `Shipping`.`ID` = " . $_POST['ID'] . ";";
	$result = $conn->query($sql);

	// CLose Database Connection
	include("includes/closeDBConn.php");

	// Set success message
	setSessionVariable("successMessage", "You shipping information was updated successfully.");

	// Redirect to Account Information
	header("Location:accountInfo.php");

?>