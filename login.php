<?php
define('DB_NAME', 'quizdb');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

// connection----------------------------------------
$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link){
	die('could not connect: ' .mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected){
	die('cant use ' .DB_NAME . ': ' . mysql_error());
} 

echo 'connected successfully';
//------------------------------------------------------

		session_start();

// get data from user
$username = $_POST['username'];
$password = $_POST['password'];




//================frist way==============================================================================================================================
 // query
// 
// $result = mysql_query("select * from loginRegistration where usernamesignup = '$username' and passwordsignup = '$password' and emailsignup = '$email' ")
// or die("Failed to qury database".mysql_error());
// 
// $row = mysql_fetch_array($result);
// 
// if($row['usernamesignup'] == $username && $row['passwordsignup'] == $password && $row['emailsignup'] == $email){
	// echo "welcome".$row['usernamesignup'];
// 	
// 	
// }else{
	// echo "fail";
// 
//==========================================second way==============================================================================================
//Checking is user existing in the database or not
        $query = "SELECT * FROM `LoginRegistration` WHERE usernamesignup ='$username' and passwordsignup='$password'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1)
	{
			$_SESSION['username'] = $username;
				// echo "welcome".['usernamesignup'];
			
			header("Location: questions.php"); // Redirect user to index.php
        }else
		{
			
			 $msg = "Username/password is incorrect.";  
echo "<script type='text/javascript'>alert('$msg');
window.location.href = 'index.php'; </script>";


		
		}
 
?>