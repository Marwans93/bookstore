<?php 
//Connection to database 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bkstr'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
//include 'db_connect.php';
//session_start();


						$isbn=$_GET['isbn']; 
						$result = mysql_query("SELECT * FROM  books WHERE isbn='$isbn'") ;
						//$result1 = mysql_query("SELECT * FROM  register WHERE username='$username'") ;
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
            <li><a href="index.php">Home</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="index.php">Books</a></li>            
            <li><a href="index.php">New Releases</a></li>  
            
            <li><a href="contact.php" class="current">Contact</a></li>
			
			<li><a  href="profile.php"> Welcome - <?php session_start(); echo $_SESSION['username'];?> </a> &nbsp <a  href="log_out.php"> Logout</a></li>
			
			
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
    	
         <!-- end of content left -->
			<table width="70%" border="1" style="float:left"> 
			
				<?php while ( $user =  mysql_fetch_array( $result ))
							{
								//$username=$user['username'];
								//$firstname=$user['firstname'];
								$_SESSION['isbn']=$user['isbn'];
								$_SESSION['title']=$user['title'];
								$_SESSION['author']=$user['author'];
								$_SESSION['price']=$user['price'];
								$_SESSION['sinopsis']=$user['sinopsis'];
								
								
											
							}
					?>
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