<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Online Bookstore | </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            
            <header>
               
				<nav class="codrops-demos">
					
					
					
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        
					
<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bkstr'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 





function SignIn() 
{ session_start(); //starting the session for user profile page 
	
		
	if(!empty( $_POST['username'] )) //checking the 'user' name which is from login.html, is it empty or have some text 
	{ 
		
		
		$query ="SELECT * FROM register WHERE username='$_POST[username]' AND passw='$_POST[password]' " ;
		$row = mysql_query($query); 
		$row1 = mysql_fetch_array($row);
		$count = mysql_num_rows($row);
		
		//echo $row1['username'];
		//echo $row1['phonenumber'];
		
		if($count == 1)
		{
			
			$_SESSION['username'] = $row1['username']; 
			
			$_SESSION['passw'] = $row1['passw'];
			
			$_SESSION['name'] = $row1['name'];
			
			
			
			$_SESSION['cpassw'] = $row1['cpassw'];
			
			//echo " SUCCESSFULLY LOGIN! " ;
				
				//header( "refresh:2;url=makluman.html" );
	   			// redirect to another page (data not found!)
				
			echo '<script language="javascript">';
				echo 'alert("Login Success. Welcome " )';

				echo '</script>';
			header("refresh:1;url=index.php");
			
			//echo $_SESSION['password'];
		}
		
		
		else if(!empty( $_POST['username'] == "admin" )) 
		{
			
			$query ="SELECT * FROM admin WHERE username='$_POST[username]' AND passw='$_POST[password]' " ;
			$row = mysql_query($query); 
			$row1 = mysql_fetch_array($row);
			$count = mysql_num_rows($row);
			
			
			
				echo '<script language="javascript">';
				echo 'alert("Admin Login Success. Welcome Admin " )';

				echo '</script>';
				header("refresh:1;url=adminIndex.php");
			
			
		}
		
		
		else
		{
				echo "FAILED TO LOGIN! USERNMAME OR PASSWORD MAYBE WRONG. :)";
				?>
				
				<html>
					<form action="login.html">

											<p class="login button"> 
												</br> <input type="submit" value="Login" /> 
											</p>
											
									</form> 
									</html>
									
									<?php
			
		}
		
		
		
		
	} 

}	
if(isset($_POST['submit'])) 
{ 
	//echo "hello0";
	SignIn(); 
	//echo "hello9";
	
	
	
	//header("Location:index.php");
	
} 	



?>	
						
						
						
						
						
						
						
						
						
						
                </div>  
            </section>
        </div>
    </body>
</html>
