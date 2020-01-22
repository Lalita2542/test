<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="fontawesome/css/fontawesome.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<style>
body {
	font-family: Arial, Helvetica, sans-serif;
}

.addproduct {
	/*  border: 1px solid #f1f1f1; */
	padding: 5px;
	text-align: center;
}

input[type=text], input[type=password] {
	width: 50%;
	padding: 6px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}

button.submit1 {
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
}

button.clear {
	background-color: #8B8989;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
}

button:hover {
	opacity: 0.8;
}

.cancelbtn {
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
}

.imgcontainer {
	text-align: center;
}

img.avatar {
	width: 120px;;
	border-radius: 50%;
}

.container {
	padding: 20px;
}

span.psw {
	float: right;
	padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
	span.psw {
		display: block;
		float: none;
	}
	.cancelbtn {
		width: 100%;
	}
}

.bgHeader {
	background-color: #CDC1C5;
	height: 80px;
	padding-top: 7px;
}

.bgBody {
	background-color: #F5FFFA;
	margin-top: 20px;
}

.text-align {
	text-align: right;
}
</style>
<body>
	<div class="container ">
	<div class="row bgHeader">
			<div class="col-md-6">
				Username : <?php echo $_SESSION["firstName"].' '.$_SESSION["lastName"] ?> <br />
			</div>

			<div class="col-md-6 text-align">
				<form action="/SalesTest/login_form.php">
					<button type="submit" class="btn btn-danger ">Logout</button>
				</form>
			</div>
		</div><br>
		
		<div class="col-md-6 text-align-left1">
			<h2>Add New Product</h2>
		</div>
		
		<div class="row bgBody">
			<form class="addproduct" action="/SalesTest/view_product_form_add_action.php" method="post">
			
				<div class="row">
					<div class="col-md-3" style="padding-top: 15px; width:170px;">ID :</div>
					<div class="col-md-3"><input type="text" name="productID" id="productID"/></div>
					<div class="col-md-3" style="padding-top: 15px; width:220px;">Name :</div>
					<div class="col-md-3"><input type="text" name="productname" id="productname"/></div>
				</div>
				
				<div class="row">
					<div class="col-md-3" style="padding-top: 15px; width:170px;">Price:</div>
					<div class="col-md-3"><input type="text" name="price" id="price"/></div>
					<div class="col-md-3" style="padding-top: 15px;">Balance :</div>
					<div class="col-md-3"><input type="text" name="balance" id="balance"/></div>
				</div>
					
				<div class="row">
					<div class="col-md-3" style="padding-top: 15px;">Img :</div>
					<div class="col-md-3"><input type="text" name="img" id="img"/></div>
				</div>
				
				<div style="padding-left: 1000px;">
					<button type="submit" id = "btnSave" name="btnSave" class="btn btn-success">Save</button>
				</div>
				
			</form>
		</div>

	</div>
</body>