<?php
session_start ();
include ("connectionDB.php");

$productid = $_POST ["productID"];
$productname = $_POST ["productname"];
$productprice = $_POST ["price"];
$balance = $_POST ["balance"];
$img = $_POST ["img"];


$sql = "INSERT INTO product(p_id, p_name, p_price, balance, path_product) VALUES (".$productid.",'".$productname."',".$productprice.",".$balance.",'".$img."')";

if ($con->query ( $sql ) === TRUE) {
		header("location:view_product_form.php");
	} else {
		header("location:view_product_form.php");
	}
$con->close ();
?>





