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
	$sql = "INSERT INTO `Shipping` ";
	$sql = $sql . "(`ID`";
	$sql = $sql . ", `username`";
	$sql = $sql . ", `shippingFirstName`";
	$sql = $sql . ", `shippingLastName`";
	$sql = $sql . ", `shippingStreet`";
	$sql = $sql . ", `shippingCity`";
	$sql = $sql . ", `shippingState`";
	$sql = $sql . ", `shippingZip`";
	$sql = $sql . ") VALUES (";
	$sql = $sql . "NULL, ";
	$sql = $sql . "'" . returnSessionVariable("username") . "', ";
	$sql = $sql . "'" . $_POST['shippingFirstName'] . "', ";
	$sql = $sql . "'" . $_POST['shippingLastName'] . "', ";
	$sql = $sql . "'" . $_POST['shippingStreet'] . "', ";
	$sql = $sql . "'" . $_POST['shippingCity'] . "', ";
	$sql = $sql . "'" . $_POST['shippingState'] . "', ";
	$sql = $sql . "'" . $_POST['shippingZip'] . "')";
	// echo $sql;
	// echo "<br>INSERT INTO `Shipping` (`ID`, `username`, `shippingFirstName`, `shippingLastName`, `shippingStreet`, `shippingCity`, `shippingState`, `shippingZip`) VALUES (NULL, 'campb303', 'shippingFirstName ', 'shippingLastName', 'shippingStreet', 'shippingCity', 'shippingState', '55555')";
	$result = $conn->query($sql);

	// CLose Database Connection
	include("includes/closeDBConn.php");

	// Set success message
	setSessionVariable("successMessage", "You shipping information was added successfully.");

	// Redirect to Account Information
	header("Location:accountInfo.php");

?>