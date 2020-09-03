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

	<title>Cliente | Mi Tienda Online</title>
</head>
<body>
<?php require '../components/nav.php'; ?>

<main class="cliente container">
    <h1 style="display: none;">Perfil de usuario</h1>

    <div class="row">
        <div class="col-md-9 principal">
            <section class="nueva-cuenta" style="display: none;">
                <h2>Has creado una cuenta</h2>
                <p>Te damos la bienvenida a Mi Tienda Online. A continuación puedes ver tus pedidos, tus datos personales y los datos de la cuenta.</p>
            </section>

            <section class="usuario d-flex">
                <h2>HOLA, USUARIO</h2>
                <p class="ml-auto">¿No eres Usuario? <a href="<?php echo RUTA ?>" class="text-uppercase">Cerrar sesión</a></p>
            </section>

            <section class="pedidos">
                
            </section>

            <hr>

            <?php require '../components/recomendados.php'; ?>
        </div>

        <div class="col-md-3 secciones">
            <section class="cuenta">
                <h2>Mi cuenta</h2>
                <p><a href="#">Datos personales</a></p>
                <p><a href="#">Tus preferencias</a></p>
                <p><a href="#">Direcciones</a></p>
                <p><a href="#">Historial de pedidos</a></p>
                <p><a href="#">Lista de deseos</a></p>
            </section>

            <hr>

            <section class="ayuda">
                <h2>¿Necesitas ayuda?</h2>
                <p><a href="<?php echo RUTA ?>/help/index.php">Productos</a></p>
                <p><a href="<?php echo RUTA ?>/help/index.php">Pedidos y formas de pago</a></p>
                <p><a href="<?php echo RUTA ?>/help/index.php">Entrega</a></p>
                <p><a href="<?php echo RUTA ?>/help/index.php">Promociones y códigos descuento</a></p>
                <p><a href="<?php echo RUTA ?>/help/index.php">Devoluciones y reembolsos</a></p>
                <p><a href="<?php echo RUTA ?>/help/index.php">Cuentas y suscripciones</a></p>
                <p><a href="<?php echo RUTA ?>/help/index.php">Información de la empresa</a></p>
            </section>
        </div>
    </div>
</main>

<?php

require '../components/footer.php';
require '../components/scripts.php';

?>