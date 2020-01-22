<?php
	session_start ();
	include ("connectionDB.php");
	
	$memberid = $_SESSION["memberID"];
	

	$sql = "SELECT * FROM mycart  where m_id =".$_SESSION["memberID"];
	
	$rs = $con->query($sql);
	
	if ($rs->num_rows > 0){
		while($row = $rs->fetch_assoc()){
			$sqlUpdateProduct = "UPDATE product SET balance = balance-".$row["qty"]." WHERE p_id= ".$row["p_id"];
			$con->query ($sqlUpdateProduct);
		}
	}
	
	$sqlDeleteAllMyCart = "DELETE FROM mycart where m_id =".$_SESSION["memberID"];
	
	if ($con->query ($sqlDeleteAllMyCart) === TRUE) {
		header("location:home_form.php");
	}else {
		header("location:view_mycart_form.php");
	}
	
?>
