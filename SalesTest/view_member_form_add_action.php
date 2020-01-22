<?php
session_start ();
include ("connectionDB.php");

$memberid = $_POST ["memberID"];
$email = $_POST ["email"];
$firstname = $_POST ["firstname"];
$lastname = $_POST ["lastname"];
$age = $_POST ["age"];
$type = $_POST ["memberType"];
$password = $_POST ["password"];

$sql = "INSERT INTO member(m_id, password, firstname, lastname, email, age, type) VALUES (" . $memberid . ",'" . $password . "','" . $firstname . "','" . $lastname . "','" . $email . "'," . $age . ",'" . $type . "')";

if ($con->query ( $sql ) === TRUE) {
		header("location:login_form.php");
	} else {
		header("location:login_form.php");
	}
$con->close ();
?>




