<?php
define('DB_NAME', 'quizdb');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(!$link){
	die('could not connect: ' .mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected){
	die('cant use ' .DB_NAME . ': ' . mysql_error());
} 
			 $msg = "Successfully Registered.";  
echo "<script type='text/javascript'>alert('$msg');
window.location.href = 'index.php'; </script>";

$usernamesignup = $_POST['form-username'];
$emailsignup = $_POST['form-email'];

$passwordsignup = $_POST['form-password'];
$phonesignup = $_POST['form-phone'];
$addresssignup = $_POST['form-address'];


$sql = "INSERT INTO loginRegistration (usernamesignup,emailsignup,passwordsignup,phonesignup,addresssignup) VALUES ('$usernamesignup','$emailsignup','$passwordsignup','$phonesignup','$addresssignup')";
//$sql = "INSERT INTO demo (password) VALUES ('$password')";

 if(!mysql_query($sql)){
 	die('Error: ' .mysql_error());
 }

?>