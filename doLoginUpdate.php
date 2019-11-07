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

	// Check if current password is correct
	$sql = "SELECT * FROM `Users` WHERE `username` = '" . returnSessionVariable("username") . "' AND `password` = '" . $_POST['currentPassword'] . "'";
	$results = $conn->query($sql);

	if ($results->num_rows != 1) {
		setSessionVariable("errorMessage", "Current password was incorrect. Please try again");
		header("Location:accountInfo.php");
		exit;
	}

	// Perform Update
	$sql = "UPDATE `Users` SET ";
	$sql = $sql . "`password` = '{$_POST['newPassword']}' ";
	$sql = $sql . "WHERE `Users`.`username` = '" . returnSessionVariable("username") . "';";
	$result = $conn->query($sql);

	// CLose Database Connection
	include("includes/closeDBConn.php");

	// Set success message
	setSessionVariable("successMessage", "You login information was updated successfully.");

	// Redirect to Account Information
	header("Location:accountInfo.php");

?>