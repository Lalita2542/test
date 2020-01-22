<?php 
session_start();
$rs1;
if (!$_SESSION["email"]){
	header("location:login_form.php");
}else{
	include ("connectionDB.php");
	
	$sql1 = "SELECT * FROM member";
	$rs1 = $con->query ( $sql1 );
	$con->close();
}
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
		</div>
		
		<div class="row bgBody">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col" width="10px;" style="text-align: center">Id</th>
						<th scope="col" width="30px;" style="text-align: center">Email</th>
						<th scope="col" width="20px;" style="text-align: center">Password</th>
						<th scope="col" width="30px;" style="text-align: center">First Name</th>
						<th scope="col" width="30px;" style="text-align: center">Last Name</th>
						<th scope="col" width="10px;" style="text-align: center">Age</th>
						<th scope="col" width="10px;" style="text-align: center">Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php if ($rs1->num_rows > 0){ ?>
							<?php while ($row = $rs1->fetch_assoc()){?>
					<tr>
						<td style="text-align: center"><?php echo $row["m_id"]?></td>
						<td><?php echo $row["email"]?></td>
						<td><?php echo $row["password"]?></td>
						<td><?php echo $row["firstname"]?></td>
						<td><?php echo $row["lastname"]?></td>
						<td><?php echo $row["age"]?></td>
						<td>
							<form class="addproduct" action="/SalesTest/view_member_form_del_action.php" method="post">
								<input type="hidden" name="memberID" id="memberID" value="<?php echo $row["m_id"]?>" /> 
								<button type="submit" id="btnDel" name="btnDel" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
						<?php } ?>
						<?php } ?>
				</tbody>
			</table>
		</div>

	</div>
</body>