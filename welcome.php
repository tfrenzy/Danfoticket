<?php
session_start();
include("connection.inc");
$email = $_POST['email'];
$password = $_POST['password'];
$salt = substr($email, 0, 5);
$stored_password = crypt($password, $salt);
$query = "SELECT * FROM `users` WHERE `Email` =  '$email' AND `Password` = '$stored_password'";
$resalt = mysql_query($query);
if (mysql_num_rows($resalt) > 0) {
$_SESSION['User'] = $email;
$_SESSION['FullName'] = mysql_result($resalt, 0, "FullName");
$_SESSION['Category'] = mysql_result($resalt, 0, "Category");
include("welcome_.php");
}
else {
include("login.php");	
}
?>