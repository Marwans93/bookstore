<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bkstr'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
		 
		 
						//edit data
						//$edit_id=$_GET['id']; 
						
						$isbn = $_POST['isbn'];
						$date = $_POST['tarikh'];
						
						$result = mysql_query("SELECT * FROM  books WHERE isbn='$isbn'") ;
						
						$data = mysql_query("SELECT * FROM register WHERE username='$username'") or die("Database Error");
						
?>		

<?php while( $book =  mysql_fetch_array( $result ))
	  {
						
						$isbn=$book['isbn'];
						$title=$book['title'];
						$author=$book['author'];
						$price=$book['price'];
	  }				
	  
	  while( $user =  mysql_fetch_array( $data ))
	  {
						
						$firstname=$user['firstname'];
						$lastname=$user['lastname'];
						$address=$user['address'];
						$phonenumber=$user['phonenumber'];
						
	  }		
					
?>

<html> 
	<body>
				
				<table width="70%" border="1" style="float:left"> 
            	 <form method="POST" action="books2.php">   	
					
								  
							<tr> 
							<td><b>ISBN :</b></td> <td> <center><?php echo $_SESSION['isbn'];?></center> </td> 
							</tr>
								
							<tr> 
							<td> <b>TITLE :</b></td> <td> <center><?php echo $_SESSION['title'];?></center> </td> 
							</tr>
							
							<tr> 
							<td> <b>AUTHOR :</b></td> <td><center> <?php echo $_SESSION['author'];?> </center></td> 
							</tr>
							
							<tr> 
							<td> <b>PRICE :</b></td> <td><center>RM <?php echo $_SESSION['price'];?> </center></td> 
							</tr>
							
							<tr> 
							<td> <b>Synopsis :</b></td> <td><center> <?php echo $_SESSION['sinopsis'];?> </center></td> 
							</tr>
						  
							<tr> 
							<td><input id="button" type="submit" name="submit" value="Buy"></td> 
								<td><h2><b><u><?php //echo "Your current balanced is RM"; echo $row['topup']; ?> </b></u></h2> </td>
							</tr>
								<?php 
								
						// looping close
						
							
					?>
                 </form>   
							
                            
          
             </table>          
			
		</body>
</html>
						
						
