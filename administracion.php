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

		<header>
			<h1>Administración</h1>
			<hr>
		</header>
		<main>
			<div class="container">
				<form action="registroProductos.php" method="POST">
					<h3>Administración de productos</h3>

					<div class="row">
						<div class="col">
							<input type="text" class="form-control" placeholder="Nombre" name="nombre">
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="Marca producto" name="marca">
						</div>

					</div>
					<br>

					<div class="col">
						<input type="float" class="form-control" placeholder="Precio producto" name="precio">
					</div>
					<br>

					<div class="row mt-3">

						<div class="col">
							<label class="font-weight-bold">Descripción:</label>
							<textarea class="form-control" rows="4" name="descripcion"></textarea>
						</div>
						<div class="col">
							<label class="font-weight-bold">Imagen:</label>
							<input type="text" class="form-control" placeholder="imagen URL " name="imagen">
						</div>
					</div>

			</div>
			<br>
			<button type="submit" class="btn btn-info btn-block" name="botonEnvio">Registrar</button>
			</form>
	</div>

	</main>



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
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>