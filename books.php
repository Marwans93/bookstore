<?php 
//Connection to database 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bkstr'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
//include 'db_connect.php';


$data = mysql_query("Select * from books ") or die("Database Error");
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
            <li><a href="books.php" class="current">Books</a></li>            
            <li><a href="index.php">New Releases</a></li>  
            
            <li><a href="contact.php">Contact</a></li>
			
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
    	<div id="templatemo_content_right">
         <!-- end of content left -->
        
		<h1> <font color="white">Books</font> </h1>
			
			<a style="background:none" href="index.php"> Back </a>
			<form>
								
								<table bgcolor="brown" width="100%" border="1" style="float:left" frame="vsides"> 
								<tr>
										<th><center><b><u> NO. </u></b></th>
										<th><center><b><u> TITLE </u></b></th>
										<th><center><b><u> ISBN </u></b></th>
										<th><center><b><u>  </u></b></th>
																				 
								</tr>		
								
								
								<?php 
								
								
								
								//session_start();
								$data = mysql_query("Select * from books ") or die("Database Error");
								$counter=1;
								//data looping
								while($row = mysql_fetch_array($data, MYSQL_BOTH))
								{ 
								?>
								
								<tr>
									<td align="center"> <?php echo $counter; ?> .</td>
									<td><center><?php echo $row['title'];?></td>
									<td><center><?php echo $row['isbn'];?></td>
									
									<td><center><a href="books1.php?isbn=<?php print ($row['isbn']);?>"><b>View Detail</b></a></td>
									
									<!--<td><center><a href="books1.php?isbn=<?php //print ($row['isbn']);?>"> <input type='submit' name='submit' value='View Details'> <b> </b></input> </a></td>
									<input type="hidden" name="isbn" value="<?php //print ($row['isbn']);?>"> -->
									
								
										
									
								</tr>
								
								<?php  // looping close
								$counter++;
								}?>
							 
								</table>
							
							
							
			</form>
    	
		
		
		
		
		
		
		
		
         <!-- end of content right -->
		</div>
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