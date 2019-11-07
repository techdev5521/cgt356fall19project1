<?php
session_start();
include("includes/phpLibs.html");

// I'm tired of these motherfucking sessions on this motherfucking server.

destroySession();
// Redirect to Login page
header("Location:login.php?logoutSuccessful=true");
?>