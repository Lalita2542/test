<?php
session_start ();
	include ("connectionDB.php");
	
	$productid = $_POST["productID"];
	$productname = $_POST["productname"];
	$productprice = $_POST["productprice"];
	$balance = $_POST["balance"];
	
	
	$sql = "UPDATE product SET p_name = '".$productname."' , p_price = '".$productprice."', balance = '".$balance."'  WHERE p_id = ".$productid;
	
	if ($con->query ( $sql ) === TRUE) {
		header("location:view_product_form.php");
	}else {
		header("location:view_product_form.php");
	}
?>