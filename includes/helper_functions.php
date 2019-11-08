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

	/** Prints $_SESSION["successMessage"] inside success if not empty.
	 */
	function printSessionSuccessMessage(){
		if (!empty($_SESSION["successMessage"])) {
			echo("<div class=\"alert alert-success alert-dismissible fade show text-center\" role=\"alert\">" 
				. $_SESSION["successMessage"] 
				. "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</span></button></div>");
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

	/** Prints action menus for billing/shipping tables
	 *
	 * Created dropdown menu with edit and delete buttons pointing to corresponding modals
	 *
	 * @param String $modalType Type of modal to be opened: "billing" | "shipping"
	 * @param int $modalNumber The number of the modal to be opened on button click
	 */
	function printActionMenu($modalType, $modalNumber){
		echo("<td>");
		echo("<div class=\"dropdown show\">");
		echo("<a class=\"btn btn-info dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\">");
		echo("<i class=\"fas fa-cog\"></i>");
		echo("</a>");
		echo("<div class=\"dropdown-menu\">");
		echo("<a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#{$modalType}EditModal{$modalNumber}\">");
		echo("<i class=\"fas fa-pencil-alt mr-2\"></i>");
		echo("Edit");
		echo("</a>");
		echo("<a class=\"dropdown-item text-danger\" href=\"#\" data-toggle=\"modal\" data-target=\"#{$modalType}DeleteModal{$modalNumber}\">");
		echo("<i class=\"fas fa-trash-alt mr-2\"></i>");
		echo("Delete");
		echo("</a>");
		echo("</div>");
		echo("</div>");
		echo("</td>");
	}

?>