<?php

session_start();
if(!isset($_SESSION["uid"])) {
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Shewen store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="main.js"></script>
		<style>
			table tr td {padding: 10px;}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Shewen store</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a  href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Customer Order Details</h1>
						<hr/>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right"; src="product_images/3D_Glass_Apples.jpg" class="img-thumbnail">
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Sony Apple</b></td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RHTSH!£HSGGDJJD764</b></td></tr>
								</table>
							</div>
						</div>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	
</body>
</html>