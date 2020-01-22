<?php
session_start();
if (isset($_POST["uname"])){
	include("connectionDB.php");
	
	$username = $_POST["uname"];
	$password = $_POST["psw"];
	
	$sql = "SELECT * FROM member WHERE email = '".$username."' AND password = '".$password."'";
	$rs = $con->query($sql);
	if ($rs->num_rows > 0){
		while ($row = $rs->fetch_assoc()){
			$_SESSION["password"] = $row["password"];
			$_SESSION["email"] = $row["email"];
			$_SESSION["firstName"] = $row["firstname"];
			$_SESSION["lastName"] = $row["lastname"];
			$_SESSION["memberID"] = $row["m_id"];
			
		 if ($_SESSION["email"]==$username && $_SESSION["password"] == $password){
			 	
		 		if($row["type"] == 'M'){
		 			header("location:home_form.php");
		 		}else{
		 			header("location:home_admin_form.php"); //redirect to page admin
		 		}
			 }else {
			 	header("location:login_form.php");
			 }
			
		}
		
	}else {
		header("location:login_form.php");
	}
}else {
	header("location:login_form.php?res=Username or Password is incorrect !!".$username);
}
$con->close();

?>
