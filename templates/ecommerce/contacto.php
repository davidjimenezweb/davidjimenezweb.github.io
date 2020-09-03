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

	<title>Contacto | Mi Tienda Online</title>
</head>
<body>
<?php require 'components/nav.php'; ?>

<main class="contacto container">
    <div class="titulo">
        <h1>Contacte con nosotros</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>
    </div>

    <hr class="my-5">

    <div class="row">
        <div class="info col-md-5">
            <h3>Llámenos o mándenos un email</h3>
            <p class="subtitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae.</p>

            <h5>Soporte:</h5>
            <p>+ 987 65 43 21</p>
            <p><a href="#">Contacto</a></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, eos unde. Sed, commodi.</p>

            <h5>Ventas:</h5>
            <p>+ 900 123 456</p>
            <p><a href="#">Contacto de ventas</a></p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero ipsam aspernatur nobis.</p>

            <h5>Consultas generales:</h5>
            <p><a href="#">lorem@ipsum.es</a></p>
        </div>

        <form class="formulario col-md-7" action="" method="post">
            <h3>Formulario de contacto</h3>
            <p class="subtitle">Las casillas marcadas con un asterisco son obligatorias</p>

            <div class="row" style="margin-top: 1em;">
                <div class="form-group col-md-6">
                    <label for="empresa" class="sr-only">Nombre</label>
                    <input name="nombre" id="empresa" class="form-control" placeholder="Nombre*" type="text" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="empresa" class="sr-only">Empresa</label>
                    <input name="empresa" id="empresa" class="form-control" placeholder="Empresa" type="text">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="email" class="sr-only">Email</label>
                    <input name="email" id="email" class="form-control" placeholder="Email*" type="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="telefono" class="sr-only">Teléfono</label>
                    <input name="telefono" id="telefono" class="form-control" placeholder="Teléfono" type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="direccion" class="sr-only">Dirección</label>
                <input id="direccion" class="form-control" placeholder="Dirección" type="text">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="ciudad" class="sr-only">Ciudad</label>
                    <input name="ciudad" id="ciudad" class="form-control" placeholder="Ciudad*" type="text" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="provincia" class="sr-only">Provincia</label>
                    <input name="provincia" id="provincia" class="form-control" placeholder="Provincia*" type="text" required>
                </div>
            </div>
            <div class="form-group">
                <label for="mensaje" class="sr-only">Mensaje</label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="4" class="form-control" placeholder="Mensaje*" required></textarea>
                <p class="legal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores odio sed eveniet perferendis animi voluptatum adipisci sint qui necessitatibus tempora rerum culpa facilis accusantium, sapiente dolorem sunt, veniam enim veritatis provident? Aspernatur ipsa, eos qui quam odit eius numquam odio hic nam minima natus ut, doloremque a atque. Natus laborum veritatis voluptatum provident, quibusdam totam ipsum adipisci atque harum numquam rem officiis delectus sapiente iusto? Non cumque excepturi nihil expedita magnam dicta facilis repellat laboriosam, ea quasi officia reiciendis? Exercitationem aliquam perferendis corrupti odio natus placeat, impedit odit, suscipit debitis quae commodi accusamus reiciendis cum explicabo? Sed accusantium nobis, vel repellendus voluptas et. Unde iste quos a incidunt ipsam. Assumenda, laudantium tempore. Animi beatae reprehenderit sit aliquid labore voluptatibus quod dolorum quo.</p>
            </div>

            <div class="form-group">
                <button class="btn button" type="submit">Enviar mensaje</button>
            </div>
        </form>
    </div>

    <section class="maps">
        <h3>Localícenos</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50057.83254311113!2d-0.5075436720569022!3d38.35790289740679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6235da3b9dab4b%3A0x1d7da872ac0b81e3!2sAlicante%20(Alacant)%2C%20Alicante!5e0!3m2!1ses!2ses!4v1575465310487!5m2!1ses!2ses" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
</main>

<?php

require 'components/footer.php';
require 'components/scripts.php';

?>