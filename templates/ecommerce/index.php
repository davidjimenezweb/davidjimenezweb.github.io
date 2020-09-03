<?php require 'php/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="author" content="Aprisoft">

	<?php require 'components/links.php'; ?>

	<title>Mi Tienda Online</title>
</head>
<body>
<?php require 'components/nav.php'; ?>

<main class="inicio container">
	<!-- Jumbotron -->
	<section class="jumbotron card card-image" style="background-image: url(<?php echo RUTA ?>/img/banner.jpg);">
		<div class="text-white py-3">
			<h1 class="card-title h1-responsive mb-4 font-weight-bold">Los Mejores Productos<span class="font-weight-normal"><br>en Cada Categoría</span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem, optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.</p>
		</div>
	</section>
	<!-- !Jumbotron -->

	<!-- Categorías -->
	<section class="categorias">
		<div class="d-flex">
			<h4>Algunas de nuestras categorías</h4>
			<a href="#" class="ml-auto">Ver todas</a>
		</div>

		<div class="row text-center">
			<div class="col-md-2">
				<a href="<?php echo RUTA ?>/categoria.php">
					<div class="categoria">
						<i class="fab fa-500px"></i>
						<p>Cortinas</p>
					</div>
				</a>
			</div>

			<div class="col-md-2">
				<a href="<?php echo RUTA ?>/categoria.php">
					<div class="categoria">
						<i class="fab fa-accusoft"></i>
						<p>Enrollables</p>
					</div>
				</a>
			</div>

			<div class="col-md-2">
				<a href="<?php echo RUTA ?>/categoria.php">
					<div class="categoria">
						<i class="fab fa-acquisitions-incorporated"></i>
						<p>Paneles japoneses</p>
					</div>
				</a>
			</div>

			<div class="col-md-2">
				<a href="<?php echo RUTA ?>/categoria.php">
					<div class="categoria">
						<i class="fab fa-asymmetrik"></i>
						<p>Estores</p>
					</div>
				</a>
			</div>

			<div class="col-md-2">
				<a href="<?php echo RUTA ?>/categoria.php">
					<div class="categoria">
						<i class="fab fa-angellist"></i>
						<p>Verticales</p>
					</div>
				</a>
			</div>

			<div class="col-md-2">
				<a href="<?php echo RUTA ?>/categoria.php">
					<div class="categoria">
						<i class="fab fa-atlassian"></i>
						<p>Venecianas</p>
					</div>
				</a>
			</div>
		</div>
	</section>
	<!-- !Categorías -->

	<!-- Favoritos -->
	<section class="favoritos">
		<h4>Nuestros productos favoritos</h4>

		<div class="productos row text-center">
			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/destacado1.jpg" class="img-fluid" alt="">
						<h5>Producto favorito</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
						<p>195<span>€</span></p>
					</div>
				</a>
			</div>
		
			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/destacado2.jpg" class="img-fluid" alt="">
						<h5>Producto favorito</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, atque?</h6>
						<p>170<span>€</span></p>
					</div>
				</a>
			</div>
		
			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/destacado3.jpg" class="img-fluid" alt="">
						<h5>Producto favorito</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, tempora hic.</h6>
						<p>220<span>€</span></p>
					</div>
				</a>
			</div>
		
			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/destacado4.jpg" class="img-fluid" alt="">
						<h5>Producto favorito</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing.</h6>
						<p>400<span>€</span></p>
					</div>
				</a>
			</div>
		</div>
	</section>
	<!-- !Favoritos -->

	<hr>

	<!-- Razones -->
	<section class="razones">
		<div class="row">
			<div class="col-md-3">
				<h2>Por qué <span>nosotros?</span></h2>
				<a href="<?php echo RUTA ?>/nosotros.php" class="button">Saber más</a>
			</div>

			<div class="col-md-3">
				<div class="razon">
					<i class="fas fa-heart"></i>
					<h5>Razón 1</h5>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="razon">
					<i class="fas fa-crown"></i>
					<h5>Razón 2</h5>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur.</p>
				</div>
			</div>
				
			<div class="col-md-3">
				<div class="razon">
					<i class="fas fa-star"></i>
					<h5>Razón 3</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- !Razones -->

	<!-- Más vendidos -->
	<section class="mas-vendidos">
		<h4>Productos más vendidos</h4>

		<div class="productos row text-center">
			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/mas-vendido1.jpg" class="img-fluid" alt="">
						<h5>Producto más vendido</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
						<p>250<span>€</span></p>
					</div>
				</a>
			</div>

			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/mas-vendido2.jpg" class="img-fluid" alt="">
						<h5>Producto más vendido</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, atque?</h6>
						<p>180<span>€</span></p>
					</div>
				</a>
			</div>

			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/mas-vendido3.jpg" class="img-fluid" alt="">
						<h5>Producto más vendido</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, tempora hic.</h6>
						<p>200<span>€</span></p>
					</div>
				</a>
			</div>

			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/mas-vendido4.jpg" class="img-fluid" alt="">
						<h5>Producto más vendido</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing.</h6>
						<p>170<span>€</span></p>
					</div>
				</a>
			</div>

			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/mas-vendido3.jpg" class="img-fluid" alt="">
						<h5>Producto más vendido</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
						<p>150<span>€</span></p>
					</div>
				</a>
			</div>

			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/mas-vendido4.jpg" class="img-fluid" alt="">
						<h5>Producto más vendido</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, atque?</h6>
						<p>280<span>€</span></p>
					</div>
				</a>
			</div>

			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/mas-vendido1.jpg" class="img-fluid" alt="">
						<h5>Producto más vendido</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, tempora hic.</h6>
						<p>230<span>€</span></p>
					</div>
				</a>
			</div>

			<div class="col-md-3">
				<a href="<?php echo RUTA ?>/producto.php">
					<div class="producto">
						<img src="<?php echo RUTA ?>/img/products/mas-vendido2.jpg" class="img-fluid" alt="">
						<h5>Producto más vendido</h5>
						<h6>Lorem ipsum dolor sit amet consectetur adipisicing.</h6>
						<p>125<span>€</span></p>
					</div>
				</a>
			</div>
		</div>
	</section>
	<!-- !Más vendidos -->
</main>

<?php

require 'components/footer.php';
require 'components/scripts.php';

?>