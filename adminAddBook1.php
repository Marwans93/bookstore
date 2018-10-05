<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bkstr'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

session_start();

if(isset($_POST['submit']))
{
	$isbn = $_POST['isbn'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$price = $_POST['price'];

	
	
	//session
	//$_SESSION['username']=$username;
	/*$_SESSION['passw']=$passw;
	$_SESSION['firstname'] = $firstname; 
	$_SESSION['lastname'] = $lastname; 
	$_SESSION['phonenumber'] = $phonenumber; 
	$_SESSION['address'] = $address; 
	$_SESSION['email'] = $email; */
			
	
	$query = "INSERT INTO books (isbn,title,author,price) VALUES ('$isbn','$title','$author','$price')";  
	
	$data = mysql_query($query) or die ("Error: " . mysql_error());
	if($data)
		
	
		echo '<script language="javascript">';
		echo 'alert("SUCCESSFULLY ADD BOOK ")';
		echo '</script>';
		header( "refresh:1;url=adminEditBook.php" );
};


mysql_close($con);

?>
