<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bkstr'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

					
				
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
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="books.php">Books</a></li>            
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
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="subpage.html">Children</a></li>
                    <li><a href="subpage.html">Teenage</a></li>
                    <li><a href="#">Adult</a></li>
                    <li><a href="#">World</a></li>
                    <li><a href="#">Sport</a></li>
                    <li><a href="#">Non-Fiction</a></li>
                    <li><a href="#">Fiction</a></li>
                    <li><a href="#">Cooking</a></li>
                    <li><a href="#">Animals</a></li>
            	</ul>
            </div>
			<div class="templatemo_content_left_section">
            	<h1>Bestsellers</h1>
                <ul>
                    <li><a href="#">Vestibulum ullamcorper</a></li>
                    <li><a href="#">Maece nas metus</a></li>
                    <li><a href="#">In sed risus ac feli</a></li>
                    <li><a href="#">Praesent mattis varius</a></li>
                    <li><a href="#">Maece nas metus</a></li>
                    <li><a href="#">In sed risus ac feli</a></li>
                    <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                    <li><a href="http://www.templatemo.com" target="_parent">CSS Templates</a></li>
                    <li><a href="http://www.webdesignmo.com" target="_parent">Web Design</a></li>
                    <li><a href="http://www.photovaco.com" target="_parent">Free Photos</a></li>
            	</ul>
            </div>
            
            <div class="templatemo_content_left_section">                
            </div>
        </div> <!-- end of content left -->
        	
		        <div id="templatemo_content_right">
        	<div class="templatemo_product_box">
            	<h1>Pengembaraan Tanah Jepun <span></span></h1>
   	      <a target="_blank" href="images/tanah_jepun.jpg"><img src="images/tanah_jepun.jpg" alt="image" width="100" height="150" /> </a>
                <div class="product_info">
                	<p>(by Azaruddin Paiman)</p>
                  <h3>$55</h3>
                    <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
                    <div class="detail_button"><a href="subpage.html">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Emak Rindu Mathanga Erissery<span></span></h1>
       	    <a target="_blank" href="images/emak_rindu.jpg"><img src="images/emak_rindu.jpg" alt="image" width="100" height="150" /> </a>
                <div class="product_info">
                	<p>(by Khairul Hakimin Muhammad)</p>
                    <h3>$35</h3>
                    <div class="buy_now_button"><a href="#">Buy Now</a></div>
                    <div class="detail_button"><a href="#">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Salina<span></span></h1>
   	        <a target="_blank" href="images/salina.jpg"><img src="images/salina.jpg" alt="image" width="100" height="150" /> </a>
                <div class="product_info">
                	<p>(By A.Samad Said) </p>
                    <h3>$65</h3>
                    <div class="buy_now_button"><a href="#">Buy Now</a></div>
                    <div class="detail_button"><a href="#">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Interbiu  <span></span></h1>
            	<a target="_blank" href="images/interbiu.jpg"><img src="images/interbiu.jpg" alt="image" width="100" height="150" /> </a>
                <div class="product_info">
                	<p>(by Syahmi Hafizuddin)</p>
                    <h3>$45</h3>
                    <div class="buy_now_button"><a href="#">Buy Now</a></div>
                    <div class="detail_button"><a href="#">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
           
        </div>	<!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="templatemo_footer">
    
	       <a href="#">Home</a> | <a href="#">Search</a> | <a href="#">Books</a> | <a href="#">New Releases</a> | <a href="google.com">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright � 2048 <a href="#"><strong>CSC 577 - SE </strong></a> | 	</div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
<div align=center>This website create by M3 CS 230 4B <a href='google.com'>| UiTM Jasin</a></div></body>
</html>