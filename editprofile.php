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
		
		<script type="text/javascript" src="j.js"></script>
		<script type="text/javascript"> 

												$(document).ready(function () 
												 {
													$("#showHide").click(function () 
													{
														if ($(".password").attr("type")=="password") 
														{
															$(".password").attr("type", "text");
														}
														else
														{
															$(".password").attr("type", "password");
														}
												 
													});
												 });
												</script>

</script>
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="books.php">Books</a></li>            
            <li><a href="index.php">New Releases</a></li>  
            
            <li><a href="contact.php">Contact</a></li>
			
			<li><a  href="profile.php" class="current"> Welcome - <?php session_start(); echo $_SESSION['username']; ?> </a> &nbsp <a  href="log_out.php"> Logout</a></li>
			
			
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
			
			
				<a style="background:none" href="profile.php"> Back </a>
			
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
					
                    <div id="wrapper">
                        
						<h1> <font color="black"> Profile Detail </font> </h1>
						<form method="POST" action="updateProfile.php" autocomplete="on">
										<?php 
											define('DB_HOST', 'localhost'); 
											define('DB_NAME', 'bkstr'); 
											define('DB_USER','root'); 
											define('DB_PASSWORD',''); 

											$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
											$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

												$username = $_SESSION['username'];
												$sql = "SELECT * from register where username ='$username'";
												// execute query
												$result = mysql_query($sql) or die("SQL select statement failed");
											    // retrieves a row data and returns it as an associative array
												$row=mysql_fetch_array($result);
												// display direct from array

										?>
																					
							<table  style="width:100%" border="0" >	
												<tr> 
													<td> USERNAME </td> <td>:</td> <td> <?php echo $row['username']; ?> </td>
												</tr>
												

												
												<tr>
													<td> PASSWORD   </td> <td>:</td> <td> <?php echo "<input type='password' class='password' size='50' name='passw' value='$row[passw]' placeholder='eg. sayabaik94'> <br>" ?> <input type="checkbox" id="showHide"> Show Password?</td>
	
												</tr>
																																		
												<tr>
													<td> FIRST NAME  </td> <td>:</td> <td> <?php echo "<input type='text' size='50' name='firstname' value='$row[firstname]' placeholder='eg. Danial '> <br>" ?> </td>
												</tr>
												
												<tr>
													<td> LAST NAME   </td> <td>:</td> <td> <?php echo "<input type='text' size='50' name='lastname' value='$row[lastname]' placeholder='eg. Kafi'> <br>" ?> </td>
												</tr>
												
												<tr>
													<td> ADDRESS  </td> <td>:</td> <td> <?php echo "<input type='text' size='50' name='address' value='$row[address]' placeholder='eg. Merlimau, Melaka'> <br>" ?> </td>
												</tr>
												
												<tr>
													<td> PHONE NUMBER   </td> <td>:</td> <td> <?php echo "<input type='text' name='phonenumber' value='$row[phonenumber]' placeholder='eg. +60123456789'> <br>" ?> </td>
												</tr>
												
												<tr>
													<td> EMAIL  </td> <td>:</td> <td> <?php echo "<input type='text' size='50' name='email' value='$row[email]' placeholder='eg. your_email94@ymail.com'> <br>" ?> </td>
												</tr>
												
											
											</table>
											
												<p class="update button"> 
													<input type="submit" name="update" value="Update & Save" /> 
													<?php echo "<input type='hidden' name='username' value='$row[username]'> "; ?>
												</p>
											
	  
						</form>  
                        
						
                    </div>
				</div>
    	
         <!-- end of content left -->
        
		
		<div id="templatemo_content_right">

				
				
            
           
        </div>
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