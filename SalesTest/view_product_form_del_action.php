<?php
	session_start ();
	include ("connectionDB.php");
	
	
	$productid = $_POST["productid"];
	
	
	$sql = "DELETE FROM product WHERE p_id = ".$productid;
	

	if ($con->query ( $sql )) {
		header ( "location:view_product_form.php" );
	} else {
		header ( "location:view_product_form.php" );
	}
$con->close ();
?>



