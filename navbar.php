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
        
        
		<li><a href="#" class="dropdown-toggle navbar-left" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a>
					<ul class="dropdown-menu">
					<div style="width: 300px; background-color: #fff; ">
						<div class="panel panel-warning" style="text-align: center;">
							<div class="panel-heading">Iniciar Sesión</div>
							<div class="panel-heading panel-warning">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email">
								<label for="email">Contraseña</label>
								<input type="password" class="form-control" id="password">
								<p><br></p>
							</div>
							<div class="panel-footer">
								<input type="submit" class="btn btn-success"  id="login" value="login" name="">
							</div>
							
						</div>
					</div>
					</ul>
		</li>
		<li class="navbar-left"><a href="customer_registration.php">Registrarse</a></li>
        <li class="navbar-left">
        <div class="form-group navbar-form navbar-left" role="search">
          <input type="text" class="form-control col-sm-10 col-md-10 col-xl-10 col-lg-10" placeholder="buscar">
          <button class="btn btn-warning col-sm-2" id="search_btn col-2" name=""><span class='glyphicon glyphicon-search'></span></button>
        </div>
        </li>
        <li id='shoppingcart navbar-left' class="navbar-left"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Carrito <span class="badge">0</span>	</a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-lg-3 col-sm-3">N°</div>
									<div class="col-md-3 col-lg-3 col-sm-3" >Imagen Producto</div>
									<div class="col-md-3 col-lg-3 col-sm-3">Nombre Producto</div>
									<div class="col-md-3 col-lg-3 col-sm-3">Precio S/</div>
								</div>
							</div>
							
							
						</div>
					</div>
		</li>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>