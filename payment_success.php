<?php
	session_start();
	include('dbconnect.php');
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}
	$uid=$_SESSION['uid'];
	$sql="SELECT * FROM customer_order WHERE uid='$uid'";
	$run_query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($run_query);
	$trid=$row['tr_id'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Deliburger</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<style type="text/css">
		.content{
			display: none;
		}
	</style>
</head>
<body background='assets/images/fondo.jpg'>
	<div class='content' >
		<div class="navbar navbar-default navbar-fixed-top" style="background-color: #ffbe76; color: #000" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">DELIBURGER</a>
			</div>

			
		</div>
	</div>
	<br><br><br><br><br>
	<div class='container-fluid' >
		<div class='row'>
		<div class='col-md-2'></div>
		<div class='col-md-8'>
			<div class="panel panel-warning">
  				<div class="panel-heading"><h1>Gracias!</h1></div>
  				<div class="panel-body">
    				Hola <?php echo $_SESSION['uname']; ?>, tu compra se realizo.
    				<br>Tu Codigo de Compra es <?php echo $trid; ?> 
    				<br>Puedes continuar comprando en la tienda.
    				<p></p>
    				<a href="profile.php" class='btn btn-warning btn-lg'>Ir a la Tienda</a>
  				</div>
			</div>
		<div class='col-md-2'></div>
	</div>

	</div>

	</div>
	</div>
	<!--Pre-loader -->
	<div class="preload"></div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
		
    	
    	$(".preload").fadeOut(2000, function(){
        $(".content").fadeIn(200);        	
		}); 

	</script>
</body>
</html>