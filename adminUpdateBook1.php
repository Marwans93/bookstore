<?php 
//Connection to database 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bkstr'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
//include 'db_connect.php';
session_start();

						//edit data
						$edit_id=$_GET['user_id']; 
						$result = mysql_query("SELECT * FROM  books WHERE isbn='$edit_id'") ;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Bookstore | </title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />


	
		
		<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            
			
			<li><a href="adminIndex.php">Welcome Admin ! </a> &nbsp <a  href="log_out.php"> Logout</a> </li>
			
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        	<p>
                <span>25%</span> discounts for
        purchase over $80
        	</p>
			<a href="subpage.html" style="margin-left: 50px;"></a>
        </div>
        
        
        <div id="templatemo_new_books">
        	<ul>
                <li>Suspen disse</li>
                <li>Maece nas metus</li>
                <li>In sed risus ac feli</li>
            </ul>
            <a href="subpage.html" style="margin-left: 50px;"></a>
        </div>
    </div> <!-- end of header -->
	
	 
	
    
    <div id="templatemo_content">
	
		
    	<div id="templatemo_content_right">
		
			<h1> <font color="white"> Update Books </font> </h1>
			
			<a style="background:none" href="adminUpdateBook.php"> Back </a>
			</br>
			</br>
			<form method="POST" action="adminUpdateBook2.php">
			
			
				<table style="width:100%" border="2" >
				
		  
					<?php while ( $user =  mysql_fetch_array( $result ))
							{
								//$username=$user['username'];
								//$firstname=$user['firstname'];
								$_SESSION['isbn']=$user['isbn'];
								$_SESSION['title']=$user['title'];
								$_SESSION['author']=$user['author'];
								$_SESSION['price']=$user['price'];
								
								
								
											
							}
					?>
					
								
								<tr> 
									<td> ISBN </td> <td> <?php echo  $_SESSION['isbn'];?> </td> <td> *cannot update</td>
								</tr>
																
								<tr>
									<td> TITLE </td><td> <input type="text" size="50" name="title" value="<?php echo  $_SESSION['title'];?>" placeholder="eg. Si Musang Dan Anak Kambing" ></input></td> <td><input id="button" type="submit" name="update" value="Update"></td>
								</tr>
								
								
																
								<tr>
									<td> AUTHOR </td><td> <input type="text" size="50" name="author" value="<?php echo  $_SESSION['author'];?>" placeholder="eg. Rosnah Mat Aris" ></input></td> <td><input id="button" type="submit" name="update" value="Update"></td>
								</tr>
								
								
								<tr>
									<td> PRICE </td><td> <input type="text" size="50" name="price" value="<?php echo  $_SESSION['price'];?>" placeholder="eg. 19.50"></input></td> <td><input id="button" type="submit" name="update" value="Update"></td>
								</tr>
							
								<?php echo "<input type='hidden' name='isbn' value='$_SESSION[isbn]'> "; ?>
							
							</table>
				
				
			  
			  
			</form>  
            
           
        </div>
         <!-- end of content left -->
        
         <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="templatemo_footer">
    
	       <a href="subpage.html">Home</a> | <a href="subpage.html">Search</a> | <a href="subpage.html">Books</a> | <a href="#">New Releases</a> | <a href="google.com">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright © 2048 <a href="#"><strong>CSC 577 - SE </strong></a> | 	</div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>