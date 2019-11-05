<?php 

	// Start Sesson
	session_start();

	// Validate Data

	foreach($_POST as $fieldName => $fieldValue) {
		if(substr($fieldName, 0, 8) != "shipping"){
			if(empty($fieldValue)){
				$_SESSION['errorMessage'] = "Please fill out {$fieldName}";
				header("Location:signup.php?emptyField={$fieldName}");
				exit;
			}
		}
	}

	// Copy all values from $_POST to $_SESSION
	foreach ($_POST as $fieldName => $fieldValue) {
			$_SESSION[$fieldName] = $fieldValue;
	}

	foreach ($_SESSION as $key => $value) {
		echo("<b>{$key}:</b> {$value}<br>");
	}

?>