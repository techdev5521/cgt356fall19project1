<?php

$db_host = "localhost";
$db_user = "project1data";
$db_pass = "VyGVFnf$7bY5XTj";
$db_name = "gamego";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error){
	die("Connection error: " . $conn->connect_error);
 }

?>