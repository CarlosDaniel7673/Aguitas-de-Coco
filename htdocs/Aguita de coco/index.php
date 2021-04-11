<?php
include '../tienda/global/conexion.php';
include '../Tienda/carrito.php';
include '../Tienda/cabecera.php';
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Aguita de Coco</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<main class="container">
		<div class="row nosotros justify-content-center">
			<div class="col-12 text-center">
				<h2 class="subtitulo"><span>¿Quienes somos?</span></h2>
				<p>
					<b>Aguita de coco</b> es una compañia con más de 15 años de trayectoria en la industria se dedica a comercializar productos derivados del coco.
				</p>
				<a href="#" class="enlace">Descubre nuestra empresa</a>
			</div>
		</div>

		<div class="row productos">
			<article class="col-12 text-center">
				<h2 class="subtitulo"><span>Lo que ofrecemos</span></h2>
				<p class="titulo">Nuestros Produtos</p>
				<p>Nuestros productos son 100% fabricados con derivados del Coco</p>
			</article>

			<div class="col-12">
				<div class="row justify-content-center">
					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/8.png" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Coco Rosado</p>
							</figcaption>
						</figure>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/9.png" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Coco Morado</p>
							</figcaption>
						</figure>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/6.png" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Coco Marino</p>
							</figcaption>
						</figure>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/7.png" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Coco Limón</p>
							</figcaption>
						</figure>
					</article>
					
					<a href="../Tienda/tienda.php">
						<center><button class="btn btn-secondary btn-lg">Todos los productos </button></center>
					</a>
				</div>
			</div>
		</div>
	</main>

	
	<script src="js/main.js"></script>
</body>
