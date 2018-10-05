<?php
/* php & mysql db connection file */
$user = "root"; //mysql username
$pass = ""; //mysql password
$host = "localhost"; //server name or ip address
$dbname = "phpweb"; //your db name

$dbconn = mysql_connect($host, $user, $pass);

if(isset($dbconn)){
	mysql_select_db($dbname, $dbconn) or 
	die("<center>Error: " . mysql_error() . "</center>");
}
else{
	echo "<center>Error: Could not connect to 
	the database.</center>";
}
?>