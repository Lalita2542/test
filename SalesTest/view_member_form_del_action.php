<?php
	session_start ();
	include ("connectionDB.php");
	
	
	$memberid = $_POST["memberID"];
	
	
	$sql = "DELETE FROM member WHERE m_id = ".$memberid;
	

	if ($con->query ( $sql )) {
		header ( "location:view_member_form.php" );
	} else {
		header ( "location:view_member_form.php" );
	}
$con->close ();
?>



