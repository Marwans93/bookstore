<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bkstr'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

session_start();

if(isset($_POST['topupupdate']))
{
	$topup = $_POST['topup'];
	$username = $_POST['username'];
	
	
	
	//session
	$_SESSION['topup']=$topup;
	
			
	
	$query = "UPDATE register SET 
	topup = topup +'$topup' 

	WHERE username = '$username'";  
	
	$data = mysql_query($query) or die ("Error: " . mysql_error());
	if($data)
	{
				echo '<script language="javascript">';
				echo 'alert("Topup succesfully " )';

				echo '</script>';
				header("refresh:1;url=topup.php");
		
	}
	

	//echo "<input type='hidden' name='user_id' value='$_SESSION[username]'> ";
	
						?><html><form><a name="user_id=<?php print ($_SESSION['username']);?>"></a></form></html>
						<?php
};


mysql_close($con);

?>
