<?php 
											define('DB_HOST', 'localhost'); 
											define('DB_NAME', 'bkstr'); 
											define('DB_USER','root'); 
											define('DB_PASSWORD',''); 

											$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
											$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

											function NewUser() 
											{ 
												$name = $_POST['namesignup']; 
												
												
												
												$username = $_POST['usernamesignup']; 
												
												$passw = $_POST['passwordsignup']; 
												$cpassw = $_POST['passwordsignup_confirm']; 
												
												
												
												$query = "INSERT INTO Register (name,username,passw,cpassw) VALUES ('$name','$username','$passw','$cpassw')"; 
												$data = mysql_query ($query)or die(mysql_error()); 
												
												if($data) 
												{ 
													//echo "YOUR REGISTRATION IS COMPLETED...";
													
													
													
													
													
													
													header("Location: registerSuccess.php");

												} 
											} 

											function SignUp() 
											{ 
												if(!empty($_POST['usernamesignup'])) 
												//checking the 'username' name which is from register.html, is it empty or have some text 
												{ 
													
													$query = mysql_query("SELECT * FROM Register WHERE username = '$_POST[usernamesignup]' AND passw = '$_POST[passwordsignup]'") or die(mysql_error()); 
													
													if(!$row = mysql_fetch_array($query) or die(mysql_error())) { newuser(); } 
													
													else { echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; } 
													
													
												} 
											} 


											//$try=$_POST['submit'];


											if(isset($_POST['submit'])) 
											{ 
												//echo "hello";
												
												SignUp(); 
												
												//header("Location: registerSuccess.php");

											} 


											?>