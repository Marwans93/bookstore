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
						$result = mysql_query("SELECT * FROM  register WHERE username='$edit_id'") ;
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
            
			
			<li><a href="adminIndex.php">Welcome Admin !  </a> &nbsp <a  href="log_out.php"> Logout</a> </li>
			
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
    	
		<?php  echo "Username : "; echo $edit_id; echo " | "?>   
	
	
		<a style="background:none" href="adminEditCust.php"> Back </a>
		
		<h1> <font color="white"> Profile Detail </font> </h1>
			<form method="POST" action="adminEditCust2.php">
			
			
				<table style="width:100%" border="2" >
				
		  
					<?php while ( $user =  mysql_fetch_array( $result ))
							{
								//$username=$user['username'];
								//$firstname=$user['firstname'];
								$_SESSION['username']=$user['username'];
								$_SESSION['firstname']=$user['firstname'];
								$_SESSION['lastname']=$user['lastname'];
								$_SESSION['phonenumber']=$user['phonenumber'];
								$_SESSION['email']=$user['email'];
								$_SESSION['passw']=$user['passw'];
								$_SESSION['address'] = $user['address'];
								
								
											
							}
					?>
					
														
								<tr> 
									<td> USERNAME </td> <td> <?php echo $_SESSION['username'];?> </td> <td> *cannot update</td>
								</tr>
								
								<tr> 
									<td> PASSWORD </td> <td> <input type="text" size="50" name="passw" value="<?php echo  $_SESSION['passw'];?>"></input> </td> <td><input id="button" type="submit" name="update" value="Update"></td>
								</tr>
																
								<tr> 
									<td> FIRST NAME </td> <td><?php echo "<input type='text' size='50' name='firstname' value='$_SESSION[firstname]'>"; ?> </td> <td><input id="button" type="submit" name="update" value="Update"></td> 
								</tr>
								
								<tr> 
									<td> LAST NAME </td> <td> <input type="text" size="50" name="lastname" value="<?php echo  $_SESSION['lastname'];?>"></input> </td> <td><input id="button" type="submit" name="update" value="Update"></td>
								</tr>
								
								<tr>
									<td> ADDRESS </td><td> <input type="text" size="50" name="address" value="<?php echo  $_SESSION['address'];?>" ></input></td> <td><input id="button" type="submit" name="update" value="Update"></td>
								</tr>
								
								<tr> 
									<td> PHONE NUMBER </td> <td> <input type="text" size="50" name="phonenumber" value="<?php echo  $_SESSION['phonenumber'];?>"></input> </td> <td><input id="button" type="submit" name="update" value="Update"></td>
								</tr>
								
								<tr>
									<td> EMAIL </td><td> <input type="text" size="50" name="email" value="<?php echo  $_SESSION['email'];?>"></input></td> <td><input id="button" type="submit" name="update" value="Update"></td>
								</tr>
							
								<?php echo "<input type='hidden' name='username' value='$_SESSION[username]'> "; ?>
							
							</table>
				
				
			  
			  
			</form>  
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