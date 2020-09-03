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

	<title>Inicio de sesión | Mi Tienda Online</title>
</head>
<body>
<main class="login-admin">
    <div class="container">
        <div class="row">
            <section class="formulario col-lg-4 col-md-5">
                <a href="<?php echo RUTA ?>"><i class="fas fa-arrow-left"></i> Volver a la web</a>
                <h2 class="text-center">Iniciar Sesión</h2>
                <form class="login-form">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="usuario" id="usuario" class="form-control" placeholder="">
                    </div>
        
                    <div class="form-check d-flex align-items-center">
                        <div class="d-block">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                <small>Recuérdame</small>
                            </label> <br>
                            <a href="#">Recuperar contraseña</a>
                        </div>
                        <button type="submit" class="btn button ml-auto">Iniciar sesión</button>
                    </div>
                </form>

                <div class="registro">
                    <h6>¿Todavía no tienes cuenta?</h6>
                    <a href="registro.html">Regístrate aquí</a>
                </div>

                <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://aprisoft.es" target="_blank">Aprisoft</a></div>
            </section>
        
            <section class="imagen col-lg-8 col-md-7" style="background-image: url(../img/banner.jpg);">
                <div class="banner">
                    <h2>Mi Tienda Online</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt vitae accusamus molestias, aliquam aperiam, atque vero reiciendis nobis beatae deleniti cupiditate porro laboriosam dicta laudantium quis dolorem nisi unde ratione.</p>
                </div>
            </section>
        </div>
    </div>
</main>

<?php require '../components/scripts.php'; ?>