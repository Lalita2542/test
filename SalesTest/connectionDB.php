<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "onlinedb";
	
	$con = new mysqli($servername, $username, $password, $dbname);
	
	if ($con->connect_error){
		die("Connection failed:".$con->connect_error);
	}
	$con->set_charset("utf8");
?>
