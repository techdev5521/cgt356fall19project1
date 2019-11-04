<?php

session_start();
header("Cache-Control: no-cache"); //prevents page from being cached by browser

//check to see if posted global variable name is not empty
if(!empty($_POST["firstName"]))
    $_SESSION["firstName"]       = $_POST["firstName"];
if(!empty($_POST["lastName"]))
    $_SESSION["lastName"]        = $_POST["lastName"];
if(!empty($_POST["email"]))
    $_SESSION["email"]           = $_POST["email"];
if(!empty($_POST["phone"]))
    $_SESSION["phone"]           = $_POST["phone"];
if(!empty($_POST["username"]))
    $_SESSION["username"]        = $_POST["username"];
if(!empty($_POST["password"]))
    $_SESSION["password"]        = $_POST["password"];
if(!empty($_POST["billingStreet"]))
    $_SESSION["billingStreet"]   = $_POST["billingStreet"];
if(!empty($_POST["billingCity"]))
    $_SESSION["billingCity"]     = $_POST["billingCity"];
if(!empty($_POST["billingState"]))
    $_SESSION["billingState"]    = $_POST["billingState"];
if(!empty($_POST["billingZip"]))
    $_SESSION["billingZip"]      = $_POST["billingZip"];
if(!empty($_POST["billingCountry"]))
    $_SESSION["billingCountry"]  = $_POST["billingCountry"];
if(!empty($_POST["cardNumber"]))
    $_SESSION["cardNumber"]      = $_POST["cardNumber"];
if(!empty($_POST["cardType"]))
    $_SESSION["cardType"]        = $_POST["cardType"];
if(!empty($_POST["cardExpiration"]))
    $_SESSION["cardExpiration"]  = $_POST["cardExpiration"];
if(!empty($_POST["cardName"]))
    $_SESSION["cardName"]        = $_POST["cardName"];




//check to see if any elements are empty
if ((empty($_POST["firstName"])) || (empty($_POST["lastName"])) || (empty($_POST["email"])) || (empty($_POST["phone"])) || (empty($_POST["username"])) || (empty($_POST["password"])) || (empty($_POST["billingStreet"])) || (empty($_POST["billingCity"])) || (empty($_POST["billingState"])) || (empty($_POST["billingZip"])) || (empty($_POST["billingCountry"])) || (empty($_POST["cardNumber"])) || (empty($_POST["cardType"])) || (empty($_POST["cardExpiration"])) || (empty($_POST["cardName"])))
{
    $_SESSION["errorMessage"] = "*Please fill out all of the required form elements"; //if any element is missing, will redirect user to the index page to fill in the missing elements
    header("Location:updateAccountInfo.php"); //redirect to updateAccountInfo so user can fill in any missing fields
    exit; //stops running code on this page
}


//check to see if shipping information is filled, and then sets them equal to the billing information counterpart
if(empty($_POST["shippingStreet"]))
{
    $_SESSION["shippingStreet"]  = $_SESSION["billingStreet"];
    $_SESSION["shippingCity"]    = $_SESSION["billingCity"];
    $_SESSION["shippingState"]   = $_SESSION["billingState"];
    $_SESSION["shippingZip"]     = $_SESSION["billingZip"];
    $_SESSION["shippingCountry"] = $_SESSION["billingCountry"];
}

//If shipping information is not filled, copies the inputted data from the billing information
else {
    $_SESSION["shippingStreet"]  = $_POST["shippingStreet"];
    $_SESSION["shippingCity"]    = $_POST["shippingCity"];
    $_SESSION["shippingState"]   = $_POST["shippingState"];
    $_SESSION["shippingZip"]     = $_POST["shippingZip"];
    $_SESSION["shippingCountry"] = $_POST["shippingCountry"];
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
//header("Location:displayFormData.php"); //redirect to displayFormData page if all elements are filled in
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
