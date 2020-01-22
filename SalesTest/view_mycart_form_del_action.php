<?php
	session_start ();
	include ("connectionDB.php");
	
	$productid = $_POST ["productid"];
	$memberid = $_SESSION ["memberID"];
	
	
	$sql = "DELETE FROM mycart WHERE p_id = ".$productid." AND m_id = ".$memberid;
	

	if ($con->query ( $sql )) {
		header ( "location:view_mycart_form.php" );
	} else {
		header ( "location:view_mycart_form.php" );
	}
$con->close ();
?>


