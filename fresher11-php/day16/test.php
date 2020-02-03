<?php
session_start();
$_SESSION["product_code"] = "2222";
$_SESSION["logged_in"] = "yes";
$enc_session = session_encode();
print "<b>Encoded Session Data:<br/></b>";
print $enc_session . "<br/><br/>";
// Changing session values
$_SESSION['product_code'] = "2000";
$_SESSION["logged_in"] = "no";
// printing $_SESSION
print "<b>SESSION Array:<br/></b>";
print "<pre>";
print_r($_SESSION);
print "</pre>";
session_decode($enc_session);
// printing Reloaded $_SESSION
print "<b>Reloaded SESSION Array:<br/></b>";
print "<pre>";
print_r($_SESSION);
print "</pre>";
?>