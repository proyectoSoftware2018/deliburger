<nav class="navbar navbar-default" style="background-color: #ffbe76; color: #000;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" style="background-color: #ffeaa7; " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="color: #000;">DELIBURGER</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        
		
		
        <li class="navbar-left">
        <div class="form-group navbar-form navbar-left" role="search">
          <input type="text" class="form-control col-sm-10 col-md-10 col-xl-10 col-lg-10" placeholder="buscar">
          <button class="btn btn-warning col-sm-2" id="search_btn col-2" name=""><span class='glyphicon glyphicon-search'></span></button>
        </div>
        </li>
        
        <li id='shoppingcart navbar-left'><a id="carticon" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Carrito <span class="badge">2</span>	</a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-lg-3 col-sm-3">N°</div>
									<div class="col-md-3 col-lg-3 col-sm-3" >Imagen Producto</div>
									<div class="col-md-3 col-lg-3 col-sm-3">Nombre Producto</div>
									<div class="col-md-3 col-lg-3 col-sm-3">Precio S/</div>
								</div>
								<hr>
								<div id="cartmenu">
								<!--<div class="row">
									<div class="col-md-3">S. No.</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $</div>
								</div>-->
								</div>
							</div>
							
							
						</div>
					</div>
				</li>
          
          <li 	><a href="#" class="dropdown-toggle navbar-right" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Bienvenido:  <?php echo $_SESSION['uname']; ?></a>
				<ul class="dropdown-menu">
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart-large"></span> Carrito</a></li>
					<li><a href="#">Cambiar Contraseña</a></li>
					<li><a href="logout.php">Salir</a></li>
				</ul>

		        </li>	
		 

        
	    	   
     </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>