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

	<title>Inicia sesión o regístrate | Mi Tienda Online</title>
</head>
<body>
<?php require '../components/nav.php'; ?>

<main class="inicio-cliente container">
    <div class="row">
        <section class="login col-md-6">
            <h1>Iniciar sesión</h1>

            <form action="<?php echo RUTA ?>/my-account" method="POST">
                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo electrónico" require>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" require> 
                </div>

                <div class="form-check d-flex align-items-center">
                    <div class="d-block">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input mt-2">
                            <small>Recuérdame</small>
                        </label> <br>
                        <a href="#" data-toggle="modal" data-target="#recuperar-password">Recuperar contraseña</a>
                    </div>
                    <button type="submit" class="btn button ml-auto">Iniciar sesión</button>
                </div>
            </form>

            <div class="por-que">
                <h4>¿Por qué crear una cuenta con nosotros?</h4>

                <ul>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia recusandae provident minus quasi reiciendis?</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus odit fugiat voluptatibus.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, minima?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas officiis aliquid magnam. Numquam, velit?</li>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam?</li>
                </ul>
            </div>
        </section>
        
        <section class="registro col-md-6">
            <h2>Únete a nosotros</h2>

            <form action="<?php echo RUTA ?>/my-account" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellidos" required>
                </div>

                <div class="form-group mb-0">
                    <label for="fecha">Fecha de nacimiento</label>
                    <div class="row">
                        <div class="form-group col-4">
                            <input type="text" name="dia" id="dia" class="form-control" placeholder="DD" required>
                        </div>
                        <div class="form-group col-4">
                            <input type="text" name="mes" id="mes" class="form-control" placeholder="MM" required>
                        </div>
                        <div class="form-group col-4">
                            <input type="text" name="anyo" id="anyo" class="form-control" placeholder="AA" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo electrónico" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
                </div>

                <div class="form-group">
                    <label for="password-2">Repite contraseña</label>
                    <input type="password" name="password-2" id="password-2" class="form-control" placeholder="Repite la contraseña" required>
                </div>
    
                <div class="mt-4 pb-5 d-flex align-items-center">
                    <button type="submit" class="btn button ml-auto">Registrarme</button>
                </div>
            </form>
        </section>
    </div>
</main>

<?php

require '../shop/components/modals.php';
require '../components/footer.php';
require '../components/scripts.php';

?>