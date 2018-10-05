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
	$isbn = $_POST['isbn'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$price = $_POST['price'];
	
	
	
	//session
	/*$_SESSION['isbn']=$user['isbn'];
	$_SESSION['title']=$user['title'];
	$_SESSION['author']=$user['author'];
	$_SESSION['price']=$user['price'];*/
		

	//$_SESSION['isbn']=$isbn;
	$_SESSION['title'] = $title; 
	$_SESSION['author'] = $author; 
	$_SESSION['price'] = $price; 
	
	$query = "UPDATE books SET 
	title = '$title',
	author = '$author',
	price = '$price'
	
	WHERE isbn = '$isbn'";  
	
	$data = mysql_query($query) or die ("Error: " . mysql_error());
	if($data)
	{
				echo '<script language="javascript">';
				echo 'alert("Books Detail Upddated " )';

				echo '</script>';
				header("refresh:1;url=adminUpdateBook.php");
		
	}
	

	//echo "<input type='hidden' name='user_id' value='$_SESSION[username]'> ";
	
						?><html><form><a name="user_id=<?php print ($_SESSION['isbn']);?>"></a></form></html>
						<?php
};


mysql_close($con);

?>
