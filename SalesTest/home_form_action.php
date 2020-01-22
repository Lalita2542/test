<?php
	session_start();
	include("connectionDB.php");
	
	$productid = $_POST["productid"];
	$qty = $_POST["qty"];
	$memberid = $_SESSION["memberID"];
	$currentDate = date("Y-m-d");
	
	$sql = "INSERT INTO mycart(m_id, p_id, qty, created_date) VALUES (".$memberid.",".$productid.",".$qty.",'".$currentDate."')";
	$sqlUpdate = "UPDATE mycart SET qty = qty + ".$qty." WHERE m_id = ".$memberid." AND p_id = ".$productid;
	
	if ($con->query($sql)){
		header("location:home_form.php");
	}else{
		if ($con->query($sqlUpdate)===TRUE){
			header("location:home_form.php");
		}else {
			echo "Error".$sqlUpdate;
		}
	}
	$con->close();
?>
