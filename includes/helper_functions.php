<?php

	/** Prints a key's value from $_SESSION if it is not empty.
	 *
	 * @param String $key The key to look for in $_SESSION
	 */
	function getSessionVariable($key){
		if (!empty($_SESSION["{$key}"])) {
			print($_SESSION[$key]);
		}
	}

	/** Set a session variable.
	 *
	 * @param String $variable The variable to set
	 * @param String $value The value of the variable to set
	 */
	function setSessionVariable($variable, $value){
		$_SESSION[$variable] = $value;
	}

	/** Returns a key's value from $_SESSION if it is not empty.
	 *
	 * @param String $key The key to look for in $_SESSION
	 * @returns String The value of $key
	 */
	function returnSessionVariable($key){
		if (!empty($_SESSION["{$key}"])) {
			return $_SESSION[$key];
		}
	}

	/** Prints $_SESSION["errorMessage"] inside warning if not empty.
	 */
	function printSessionErrorMessage(){
		if (!empty($_SESSION["errorMessage"])) {
			echo("<div class=\"alert alert-warning text-center\" role=\"alert\">" . $_SESSION["errorMessage"] . "</div>");
		}
	}

	/** Print's array in human readable format
	 *
	 * @param Array $array The array to print
	 */
	function printArray($array){
		foreach ($array as $key => $value) {
			print("{$key}: $value<br />");
		}
	}

	/** Unsets session variables and destroys session
	 */
	function destroySession(){
		foreach ($_SESSION as $key => $value) {
			$_SESSION[$key] = "";
		}
		session_unset();
		session_destroy();
	}

?>