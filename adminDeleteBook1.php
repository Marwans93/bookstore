<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bkstr'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

session_start();
				
if(isset($_POST['delete']))
{
	$isbn = $_POST['isbn'];
	//$title = $_POST['title'];
	//$author = $_POST['author'];
	//$price = $_POST['price'];
	
	
	
	//session
	/*$_SESSION['isbn']=$user['isbn'];
	$_SESSION['title']=$user['title'];
	$_SESSION['author']=$user['author'];
	$_SESSION['price']=$user['price'];*/
		

	//$_SESSION['isbn']=$isbn;
	//$_SESSION['title'] = $title; 
	//$_SESSION['author'] = $author; 
	//$_SESSION['price'] = $price; 
	//$edit_id=$_GET['user_id']; 
	//$result = mysql_query("SELECT * FROM  books WHERE isbn='$edit_id'") ;
						

	//echo $edit_id;
	
	$query = "DELETE FROM books WHERE isbn = '$isbn'";  
	
	$data = mysql_query($query) or die ("Error: " . mysql_error());
	if($data)
	{
				echo '<script language="javascript">';
				echo 'alert("Books Deleted " )';

				echo '</script>';
				header("refresh:1;url=adminDeleteBook.php");
		
	}
	

	//echo "<input type='hidden' name='user_id' value='$_SESSION[username]'> ";
	
						?>
						<?php
};


mysql_close($con);

?>
