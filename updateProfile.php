<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bkstr'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

session_start();

if(isset($_POST['update']))
{
	$username = $_POST['username'];
	$passw = $_POST['passw'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	
	
	//session
	//$_SESSION['username']=$username;
	$_SESSION['passw']=$passw;
	$_SESSION['firstname'] = $firstname; 
	$_SESSION['lastname'] = $lastname; 
	$_SESSION['phonenumber'] = $phonenumber; 
	$_SESSION['address'] = $address; 
	$_SESSION['email'] = $email; 
			
	
	$query = "UPDATE Register SET 
	passw = '$passw',
	firstname = '$firstname',
	lastname = '$lastname',
	phonenumber = '$phonenumber',
	address = '$address',
	email = '$email'
	
	
	WHERE username = '$username'";  
	
	$data = mysql_query($query) or die ("Error: " . mysql_error());
	if($data)
		
	
		echo '<script language="javascript">';
		echo 'alert("SUCCESSFULLY UPDATE ")';
		echo '</script>';
		header( "refresh:1;url=editProfile.php" );
};


mysql_close($con);

?>
