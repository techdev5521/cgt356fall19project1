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
	$sql = "UPDATE `Users` SET ";
	$sql = $sql . "`firstName` = '{$_POST['firstName']}'";
	$sql = $sql . ", `lastName` = '{$_POST['lastName']}'";
	$sql = $sql . ", `email` = '{$_POST['email']}'";
	$sql = $sql . ", `phone` = '{$_POST['phone']}' ";
	$sql = $sql . "WHERE `Users`.`username` = '" . returnSessionVariable("username") . "';";
	echo $sql;
	$result = $conn->query($sql);

	// CLose Database Connection
	include("includes/closeDBConn.php");

	// Set success message
	setSessionVariable("successMessage", "You account information was updated successfully.");

	// Redirect to Account Information
	header("Location:accountInfo.php");

?>