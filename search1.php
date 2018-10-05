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

$data = mysql_query("Select * from books ") or die("Database Error");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Bookstore | </title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />


		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		
		<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" >Home</a></li>
            <li><a href="search.php" class="current">Search</a></li>
            <li><a href="index.php">Books</a></li>            
            <li><a href="index.php">New Releases</a></li>  
             
            <li><a href="contact.php">Contact</a></li>
			
			
			<li><a  href="profile.php"> Welcome - <?php ; echo $_SESSION['username'];?> </a> &nbsp <a  href="log_out.php"> Logout</a></li>
			
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
	
		<div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
					
                    <div id="wrapper">
                       
						<h1> <font color="black"> Search </font> </h1>

							
							<form method="POST" action="search1.php">

							</br>
							Insert title of Book: <input type="text" name="title" size="15" >

							
							
							<p class="login button"> 
								<input type="submit" name="submit" value="Submit" /> 
							</p>
			
			<table width="70%" border="1" style="float:left"> 
            		
					<?php 
					//data looping
					
					while($row = mysql_fetch_array($data, MYSQL_BOTH)){ 
						if($row['title'] == $_POST['title'] )
						{
							?>
                          
					<tr> 
					<td> <b>ISBN :</b></td> <td> <center><?php echo $row['isbn'];?></center> </td> 
					</tr>
						
					<tr> 
					<td> <b>TITLE :</b> </td> <td> <center><?php echo $row['title'];?></center> </td> 
					</tr>
                    
                    <tr> 
					<td> <b>AUTHOR :</b> </td> <td><center> <?php echo $row['author'];?> </center></td> 
					</tr>
                    
                    <tr> 
					<td> <b>PRICE :</b> </td> <td><center> <?php echo $row['price'];?> </center></td> 
					</tr>
                  
					<?php 
						
						}// looping close
						
							
					}?>
                 </form>   
							
                            
          
             </table>           
						
                    </div>
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
<div align=center>This website create by M3 CS 230 4B <a href='google.com'>| UiTM Jasin</a></div></body>
</html>