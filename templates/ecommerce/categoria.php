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

	<title>Categoría | Mi Tienda Online</title>
</head>
<body>
<?php require 'components/nav.php'; ?>

<main class="categoria container">
	<!-- Jumbotron -->
	<section class="jumbotron card card-image" style="background-image: url(<?php echo RUTA ?>/img/banner.jpg);">
		<div class="text-white py-2">
			<h1 class="card-title">Nombre de la categoría</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem, optio vero odio nam sit officia accusamus.</p>
		</div>
	</section>
	<!-- !Jumbotron -->

	<section class="cuerpo">
		<div class="row">
			<div class="col-md-3">
				<!-- Filtros -->
				<div class="filtros">
					<div class="filtro order">
						<h5>Ordenar por</h5>
					
						<ul class="list-unstyled link-black">
							<li class="mb-2"><a href="" class="active">Por defecto</a></li>
							<li class="mb-2"><a href="" class="">Popularidad</a></li>
							<li class="mb-2"><a href="" class="">Clasificación</a></li>
							<li class="mb-2"><a href="" class="">Precio: menor a mayor</a></li>
							<li class="mb-2"><a href="" class="">Precio: mayor a menor</a></li>
						</ul>
					</div>
					
					<div class="filtro category">
						<h5>Categoría</h5>
					
						<div class="form-check mb-2">
							<input type="radio" class="form-check-input" id="todos" name="categorias">
							<label class="form-check-label" for="todos">Todos</label>
						</div>
					
						<div class="form-check mb-2">
							<input type="radio" class="form-check-input" id="cortinas" name="categorias" checked>
							<label class="form-check-label" for="cortinas">Cortinas</label>
						</div>
					
						<div class="form-check mb-2">
							<input type="radio" class="form-check-input" id="enrollables" name="categorias">
							<label class="form-check-label" for="enrollables">Enrollables</label>
						</div>
					
						<div class="form-check mb-2">
							<input type="radio" class="form-check-input" id="paneles-japoneses" name="categorias">
							<label class="form-check-label" for="paneles-japoneses">Paneles japoneses</label>
						</div>

						<div class="form-check mb-2">
							<input type="radio" class="form-check-input" id="estores" name="categorias">
							<label class="form-check-label" for="estores">Estores</label>
						</div>

						<div class="form-check mb-2">
							<input type="radio" class="form-check-input" id="verticales" name="categorias">
							<label class="form-check-label" for="verticales">Verticales</label>
						</div>

						<div class="form-check mb-2">
							<input type="radio" class="form-check-input" id="venecianas" name="categorias">
							<label class="form-check-label" for="venecianas">Venecianas</label>
						</div>

						<div class="form-check mb-2">
							<input type="radio" class="form-check-input" id="noche-y-dia" name="categorias">
							<label class="form-check-label" for="noche-y-dia">Noche y día</label>
						</div>

						<div class="form-check mb-2">
							<input type="radio" class="form-check-input" id="mecanismos" name="categorias">
							<label class="form-check-label" for="mecanismos">Mecanismos</label>
						</div>

						<div class="form-check mb-2">
							<input type="radio" class="form-check-input" id="ropa-de-cama" name="categorias">
							<label class="form-check-label" for="ropa-de-cama">Ropa de cama</label>
						</div>

						<div class="form-check mb-2">
							<input type="radio" class="form-check-input" id="alfombras" name="categorias">
							<label class="form-check-label" for="alfombras">Alfombras</label>
						</div>
					</div>
					
					<div class="filtro price pb-3">
						<h5>Precio</h5>
					
						<form class="range-field">
							<input type="range" min="0" max="500" style="width: 100%;">
						</form>
					
						<div class="row justify-content-center">
							<div class="col-md-6 text-left">
								<p class="dark-grey-text">0€</p>
							</div>
					
							<div class="col-md-6 text-right">
								<p class="dark-grey-text">500€</p>
							</div>
						</div>
					</div>
				</div>
				<!-- !Filtros -->
			</div>

			<div class="col-md-9">
				<!-- Productos -->
				<section class="productos">
					<div class="row text-center">
						<div class="col-md-4">
							<a href="<?php echo RUTA ?>/producto.php">
								<div class="producto">
									<img src="<?php echo RUTA ?>/img/products/destacado1.jpg" class="img-fluid" alt="">
									<h5>Producto</h5>
									<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
									<p>250<span>€</span></p>
								</div>
							</a>
						</div>
		
						<div class="col-md-4">
							<a href="<?php echo RUTA ?>/producto.php">
								<div class="producto">
									<img src="<?php echo RUTA ?>/img/products/destacado2.jpg" class="img-fluid" alt="">
									<h5>Producto</h5>
									<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, atque?</h6>
									<p>180<span>€</span></p>
								</div>
							</a>
						</div>
		
						<div class="col-md-4">
							<a href="<?php echo RUTA ?>/producto.php">
								<div class="producto">
									<img src="<?php echo RUTA ?>/img/products/destacado3.jpg" class="img-fluid" alt="">
									<h5>Producto</h5>
									<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, tempora hic.</h6>
									<p>200<span>€</span></p>
								</div>
							</a>
						</div>
		
						<div class="col-md-4">
							<a href="<?php echo RUTA ?>/producto.php">
								<div class="producto">
									<img src="<?php echo RUTA ?>/img/products/destacado4.jpg" class="img-fluid" alt="">
									<h5>Producto</h5>
									<h6>Lorem ipsum dolor sit amet consectetur adipisicing.</h6>
									<p>170<span>€</span></p>
								</div>
							</a>
						</div>
		
						<div class="col-md-4">
							<a href="<?php echo RUTA ?>/producto.php">
								<div class="producto">
									<img src="<?php echo RUTA ?>/img/products/mas-vendido3.jpg" class="img-fluid" alt="">
									<h5>Producto</h5>
									<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
									<p>150<span>€</span></p>
								</div>
							</a>
						</div>
		
						<div class="col-md-4">
							<a href="<?php echo RUTA ?>/producto.php">
								<div class="producto">
									<img src="<?php echo RUTA ?>/img/products/mas-vendido4.jpg" class="img-fluid" alt="">
									<h5>Producto</h5>
									<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, atque?</h6>
									<p>280<span>€</span></p>
								</div>
							</a>
						</div>
		
						<div class="col-md-4">
							<a href="<?php echo RUTA ?>/producto.php">
								<div class="producto">
									<img src="<?php echo RUTA ?>/img/products/mas-vendido1.jpg" class="img-fluid" alt="">
									<h5>Producto</h5>
									<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, tempora hic.</h6>
									<p>230<span>€</span></p>
								</div>
							</a>
						</div>
		
						<div class="col-md-4">
							<a href="<?php echo RUTA ?>/producto.php">
								<div class="producto">
									<img src="<?php echo RUTA ?>/img/products/mas-vendido2.jpg" class="img-fluid" alt="">
									<h5>Producto</h5>
									<h6>Lorem ipsum dolor sit amet consectetur adipisicing.</h6>
									<p>125<span>€</span></p>
								</div>
							</a>
						</div>
					</div>
				</section>
				<!-- !Productos -->
			</div>
		</div>
	</section>
</main>

<?php

require 'components/footer.php';
require 'components/scripts.php';

?>