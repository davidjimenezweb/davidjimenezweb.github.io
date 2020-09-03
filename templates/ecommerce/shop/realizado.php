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

	<title>Pedido realizado con éxito | Mi Tienda Online</title>
</head>
<body>
<?php require '../components/nav.php'; ?>

<main class="realizado container">
    <h1>Pedido realizado con éxito</h1>
    <p>Comprueba que la confirmación de pedido y la información de entrega detallada hayan llegado a tu correo electrónico o visita el <a href="#">centro de mensajes</a> para revisar tus notificaciones.</p>

    <h5>Número de pedido: 123-3456789</h5>
    <ul class="ml-5">
        <li>Producto 1 se enviará a <a href="#">Usuario</a> por parte de <b>Mi Tienda Online</b>.</li>
        <li>Producto 2 se enviará a <a href="#">Usuario</a> por parte de <b>Mi Tienda Online</b>.</li>
    </ul>
    <p>Fecha de entrega estimada: <b>3 feb 2020 - 4 feb 2020</b></p>

    <hr>
    
    <?php require '../components/recomendados.php'; ?>
</main>

<?php

require 'components/modals.php';
require '../components/footer.php';
require '../components/scripts.php';

?>