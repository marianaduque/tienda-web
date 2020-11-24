<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> SUMMER FASHION </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos/estilos.css">
	<link rel="shortcut icon" href="vestido.ico">
</head>

<body>
	<div class="container">
		<br>
		<h1><strong>SUMMER FASHION👗</strong></h1>
		<nav class="navbar navbar-expand-lg navbar-light menú" style=" background-color: #D7BDE2 ;">

			<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon "></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="inicio.php"></i><strong>Inicio</strong> <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="administracion.php"><strong>Administración de productos </strong></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="listaProductos.php"><strong>Productos en bodega</strong></a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- codigo carrousel -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">

				<div class="carousel-item active" data-interval="2000">
					<img src="img/creative.jpg" class="d-block w-100" width="100%" height="200">
				</div>

				<div class="carousel-item" data-interval="2000">
					<img src="img/banner.jpg" class="d-block w-100" width="100%" height="200">
				</div>

				<div class="carousel-item" data-interval="2000">
					<img src="img/summer.jpg" class="d-block w-100" width="100%" height="200">
				</div>

			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<br>

		<?php

		include("BaseDatos.php");

		//  1.Crear un objeto de la clase BaseDatos 
		$transaccion = new BaseDatos();

		// 2. Crear la consulta SQL para buscar datos
		$consultaSQL = "SELECT * FROM productos";

		// 3.Utilizar el metodo para consultarDatos()
		$productos = $transaccion->consultarDatos($consultaSQL);


		// print_r($productos);

		?>


		<div class="container">

			<div class="row row-cols-1 row-cols-md-3">

				<?php foreach ($productos as $producto) : ?>

					<div class="col mb-4">
						<div class="card h-100">
							<img src="<?php echo ($producto["imagen"]) ?>" class="card-img-top" alt="imagen">
							<div class="card-body">
								<h3 class="card-title"><?php echo ($producto["nombre"]) ?></h3>
								<h4 class="card-number"><?php echo ($producto["precio"]) ?></h4>
								<p class="card-text"><?php echo ($producto["descripcion"]) ?></p>

								<a href="eliminarProductos.php?id=<?php echo ($producto["idproducto"]) ?>" class="btn btn-danger">Eliminar</a>
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo ($producto["idproducto"])?>">
									Editar
								</button>

							</div>
						</div>

						<div class="modal fade" id="editar<?php echo ($producto["idproducto"])?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">EDICIÓN DE USUARIO</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="editarProductos.php?id=<?php echo($producto["idproducto"])?>" method="POST">
											<div class="form-group">
												<label >Nombre</label>
												<input type="text" class="form-control" name="nombreEditar" value="<?php  echo($producto["nombre"])?>" >
											</div>

											<div class="form-group">
												<label >Precio</label>
												<input type="number" class="form-control" name="precioEditar" value="<?php  echo($producto["precio"])?>">
											</div>

											<div class="form-group">
												<label >Descripción</label>
												<textarea class="form-control" rows="3" name="descripcionEditar"> <?php  echo($producto["descripcion"])?> </textarea>
											</div>
											<button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
										</form>
									</div>

								</div>
							</div>
						</div>


					</div>
				<?php endforeach ?>
			</div>
		</div>



		<div class="container-fluid" style="background-color:#D7BDE2;">
			<div class="container">
				<div class="row">
					<div class="col-sm">
						Dirección: Carrera 8 # 3-9 <br> Teléfono: 3005448583 <br> Email: summerfashion@gmail.com
					</div>
					<div class="col-sm">
						<strong> By:MARIANA DUQUE♡ </strong> <br><br> Página:summerfashion.md
					</div>
					<div class="col-sm">
						<a href="https://www.facebook.com">
							<img src="img/piña.jpg" width="80" height="70">

						</a>
						<img src="img/veranoo.jpg" width="80" height="70">

					</div>
				</div>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>