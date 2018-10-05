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
	$phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	
	
	//session
	$_SESSION['passw']=$passw;
	$_SESSION['firstname'] = $firstname; 
	$_SESSION['lastname'] = $lastname; 
	$_SESSION['phonenumber'] = $phonenumber; 
	$_SESSION['email'] = $email; 
	$_SESSION['address']=$address;
			
	
	$query = "UPDATE Register SET 
	passw = '$passw',
	firstname = '$firstname',
	lastname = '$lastname',
	address = '$address',
	phonenumber = '$phonenumber',
	email = '$email',
	cpassw = '$passw'
	
	WHERE username = '$username'";  
	
	$data = mysql_query($query) or die ("Error: " . mysql_error());
	if($data)
	{
				echo '<script language="javascript">';
				echo 'alert("Customer Detail Upddated " )';

				echo '</script>';
				header("refresh:1;url=adminEditCust.php");
		
	}
	

	//echo "<input type='hidden' name='user_id' value='$_SESSION[username]'> ";
	
						?><html><form><a name="user_id=<?php print ($_SESSION['username']);?>"></a></form></html>
						<?php
};


mysql_close($con);

?>
