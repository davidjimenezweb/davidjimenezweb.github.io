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

	<title>Registro | Mi Tienda Online</title>
</head>
<body>
<main class="login-admin">
    <div class="container">
        <div class="row">
            <section class="formulario col-lg-4 col-md-5">
                <a href="<?php echo RUTA ?>"><i class="fas fa-arrow-left"></i> Volver a la web</a>
                <h2 class="text-center">Crear cuenta</h2>
                <form class="login-form">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="fecha">Fecha de nacimiento</label>
                        <div class="row mx-auto">
                            <input type="text" name="dia" id="dia" class="form-control col-4" placeholder="DD">
                            <input type="text" name="mes" id="mes" class="form-control col-4" placeholder="MM">
                            <input type="text" name="anyo" id="anyo" class="form-control col-4" placeholder="AA">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="correo">Correo electrónico</label>
                        <input type="text" name="correo" id="correo" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="password-2">Repite contraseña</label>
                        <input type="password" name="password-2" id="password-2" class="form-control" placeholder="">
                    </div>
        
                    <div class="form-check mt-5 pb-5 d-flex align-items-center">
                        <div class="d-block text-center">
                            <h6 class="mb-0 font-weight-bold">¿Ya tienes cuenta?</h6>
                            <a href="login.html">Inicia sesión aquí</a>
                        </div>
                        <button type="submit" class="btn button ml-auto">Registrarme</button>
                    </div>
                </form>
            </section>
        
            <section class="imagen col-lg-8 col-md-7" style="background-image: url(../img/index/banner.jpg);">
                <div class="banner">
                    <h2>Mi Tienda Online</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt vitae accusamus molestias, aliquam aperiam, atque vero reiciendis nobis beatae deleniti cupiditate porro laboriosam dicta laudantium quis dolorem nisi unde ratione.</p>
                </div>
            </section>
        </div>
    </div>
</main>
    
<?php require '../components/scripts.php'; ?>