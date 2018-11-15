<?php
	session_start();
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}
 ?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Deliburger</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body background='assets/images/fondo.jpg'>
	<div class="navbar navbar-default navbar-fixed-top" style="background-color: #ffbe76; color: #000" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">DELIBURGER</a>
			</div>

			
		</div>
	</div>
	<p><br><br></p>
	<p><br><br></p>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="row">
				<div class="col-md-12" id="cart_msg"></div>
			</div>
				<div class="panel panel-warning text-center">
					<div class="panel-heading">Carrito de Compras - Productos</div>
					<div class="panel-body"></div>
					<div class="row">
						<div class="col-md-2"><b>Acción</b></div>
						<div class="col-md-2"><b>Imagen</b></div>
						<div class="col-md-2"><b>Nombre</b></div>
						<div class="col-md-2"><b>Precio</b></div>
						<div class="col-md-2"><b>Cantidad</b></div>
						<div class="col-md-2"><b>Total en S/</b></div>
					</div>
					<br><br>
					<div id='cartdetail'>
					<!--<div class="row">
						<div class="col-md-2"><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span></a>
						</div>
						<div class="col-md-2"><img src="assets/prod_images/tshirt.JPG" width="60px" height="60px"></div>
						<div class="col-md-2">Tshirt</div>
						<div class="col-md-2">$700</div>
						<div class="col-md-2"><input class="form-control" type="text" size="10px" value='1'></div>
						<div class="col-md-2"><input class="form-control" type="text" size="10px" value='700'></div>
					</div>-->
					</div>
					<!--<div class="row">
						<div class="col-md-8"></div>
						<div class="col-md-4">
							<b>Total: $500000</b>
						</div>
					</div>-->
					<div class="panel-footer">

					</div>
				</div>

				<button class='btn btn-warning btn-lg pull-right' id='checkout_btn' data-toggle="modal" data-target="#myModal">COMPRAR</button>
				<a class='btn btn-info btn-lg pull-right'  href="index.php">VOLVER</a>
			</div>

			<div class="col-md-2"></div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>	
</body>
</html>