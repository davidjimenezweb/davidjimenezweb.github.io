<?php require '../php/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="author" content="Aprisoft">

	<?php require '../components/links.php'; ?>

	<title>Ayuda | Mi Tienda Online</title>
</head>
<body>
<?php require '../components/nav.php'; ?>

<main class="ayuda container">
    <!-- Jumbotron -->
	<section class="jumbotron card card-image mb-5">
		<div class="py-3">
            <h1 class="card-title">¿Necesitas ayuda?</h1>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem, optio vero odio nam sit officia.</p>

			<div class="input-group" style="max-width: 965px; margin: auto">
                <input type="text" name="busca-ayuda" class="form-control" placeholder="Busca respuesta en nuestras páginas de ayuda al cliente" aria-describedby="button-buscar-ayuda">
                <div class="input-group-append">
                    <button class="btn button text-uppercase" type="button" id="button-buscar-ayuda">Buscar <i class="fas fa-chevron-circle-right"></i></button>
                </div>
            </div>
		</div>
	</section>
    <!-- !Jumbotron -->
    
    <div class="container">
        <?php require 'frecuentes.php'; ?>
    </div>
</main>

<?php

require '../components/footer.php';
require '../components/scripts.php';

?>