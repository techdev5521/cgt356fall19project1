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

	/** Print's array in human readable format
	 *
	 * @param Array $array The array to print
	 */
	function printArray($array){
		foreach ($array as $key => $value) {
			print("{$key}: $value<br />");
		}
	}

?>