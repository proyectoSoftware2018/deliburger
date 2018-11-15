<?php 
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:profile.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Deliburger</title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	
</head>
<body>

<?php 
include("navbar.php");
include("carousel.php");
?>


<br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-2">
      <div id="get_cat"></div>
        
      
        
      </div>
      <div class="col-md-8">
      <div class="row">
          <div class="col-md-12" id="cartmsg">
            
          </div>
        </div>
        <div class="panel panel-warning">
          <div class="panel-heading text-center">--Todos los Productos--
            <div class='pull-right'>
                ver por: &nbsp;&nbsp;&nbsp; <a href="#"  style='color:#fd9644;'id='pop_sort'>Popularidad</a>
              </div>
          </div>
          <div class="panel-body">
          <div id="get_product"></div>
            
          </div>
          <div class="panel-footer" style="text-align: center;">&copy; Negocios Electronicos 2018</div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <div class="row">
            <div class="col-md-2"></div>
      <div class="col-md-10">
        <center>
          <ul class='pagination' id='pageno'>
            
          </ul>
        </center>
      </div>

      <!-- Modal -->
        
        <div class="modal fade" id="prod_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Detalle del Producto</h4>
              </div>
              <div class="modal-body" id='dynamic_content'>
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                
              </div>
            </div>
          </div>
        </div>

       <!-- Modal ends-->
    </div>
  </div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>
</html>