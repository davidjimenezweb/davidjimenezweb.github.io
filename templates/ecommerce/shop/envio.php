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

	<title>Dirección de envío | Mi Tienda Online</title>
</head>
<body>
<?php require '../components/nav.php'; ?>

<main class="envios container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-uppercase"><a href="#"><span>1</span> Envío</a></li>
            <li class="breadcrumb-item text-uppercase"><span>2</span> Pago</li>
            <li class="breadcrumb-item text-uppercase"><span>3</span> Pedido realizado</li>
        </ol>
    </nav>

    <hr class="pb-3">

    <div class="row envio">
        <section class="datos col-md-8">
            <h1>Dirección de entrega</h1>

            <hr>

            <form action="pago.php" method="POST">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" require>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellidos" require>
                    </div>
                </div>

                <div class="form-group">
                    <label for="direccion-1">Dirección (1ª línea)</label>
                    <input type="text" name="direccion-1" id="direccion-1" class="form-control" placeholder="Dirección (1ª línea)" require>
                    <small style="color: #6C757C">Nombre de la calle y número</small>
                </div>

                <div class="form-group">
                    <label for="telefonno">Dirección (2ª línea - opcional)</label>
                    <input type="text" name="direccion-2" id="direccion-2" class="form-control" placeholder="Dirección (2ª línea - opcional)">
                    <small style="color: #6C757C">p. ej. piso, escalera, puerta...</small>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="cp">Código postal</label>
                        <input type="text" name="cp" id="cp" class="form-control" placeholder="cp" require>
                        <small style="color: #6C757C">p. ej. 28001</small>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Ciudad" require>
                    </div>
                </div>

                <p>País: <b>España</b></p>

                <div class="form-group">
                    <label for="telefono">Número de teléfono (opcional)</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Número de teléfono (opcional)">
                    <small style="color: #6C757C">Solo te llamaremos si tenemos alguna duda sobre tu pedido</small>
                </div>

                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo electrónico" require>
                </div>

                <div class="form-group">
                    <label for="n-iva">N. IVA</label>
                    <input type="text" name="n-iva" id="n-iva" class="form-control" placeholder="N. IVA">
                    <small style="color: #6C757C">p. ej. ES12345678R</small>
                </div>

                <div class="form-check pt-2">
                    <input class="form-check-input" type="checkbox" name="mayor" value="" id="mayor" require>
                    <label class="form-check-label" for="mayor" style="font-size: 14px;">Sí, soy mayor de <b>16 años</b>.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="mayor" value="" id="mayor">
                    <label class="form-check-label" for="mayor" style="font-size: 14px;">Facilito mis datos de contacto para que Mi Tienda Online me informe de los productos y servicios de Mi Tienda Online relevantes para mí. Sé que puedo hacer que Mi tienda Online deje de comunincarse conmigo en cualquier momento.</label>
                </div>

                <button type="submit" class="btn btn-lg button mt-4 mb-md-0 mb-5">Revisar y pagar <i class="fas fa-arrow-right ml-2"></i></button>
            </form>
        </section>
        
        <section class="sesion col-md-4">
            <div class="inicio-sesion">
                <h2 class="mb-0">Iniciar sesión</h2>
                <a href="#" data-toggle="modal" data-target="#recuperar-password">¿Has olvidado la contraseña?</a>
                
                <div class="form-inicio">
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <label for="correo">Correo electrónico</label>
                            <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo electrónico" require>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" require>
                        </div>

                        <div class="form-check d-flex">
                            <div>
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input mt-2">
                                    <p class="mt-1">Recuérdame</p>
                                </label>
                            </div>
                            <button type="submit" class="btn button ml-auto">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="datos">
                <h2>Resumen del pedido:</h2>
                <div class="resumen">
                    <h5>2 productos</h5>

                    <hr>

                    <div class="d-flex">
                        <p>Total del producto</p>
                        <p class="ml-auto font-weight-bold">189.25€</p>
                    </div>

                    <hr>

                    <div class="d-flex">
                        <p>Descuento</p>
                        <p class="ml-auto font-weight-bold">0.00€</p>
                    </div>

                    <hr>

                    <div class="d-flex">
                        <p>Entrega</p>
                        <p class="ml-auto font-weight-bold">Gratis</p>
                    </div>

                    <hr class="pb-3">

                    <div class="d-flex total">
                        <p>Total <br> <b>(IVA incluido)</b></p>
                        <p class="ml-auto font-weight-bold">189.25€</p>
                    </div>
                </div>
            </div>

            <div class="descuento">
                <div class="d-flex align-items-center" data-toggle="collapse" href="#codigo-promocional" role="button" aria-expanded="false" aria-controls="codigo-promocional" style="padding: 0 10px">
                    <h2>Código promocional</h2> <i class="fas fa-chevron-down ml-auto"></i>
                </div>
                <div class="collapse promocion" id="codigo-promocional">
                    <div class="card card-body">
                        <input type="text" name="promocion" placeholder="Introduce un código de descuento">
                        <small>Introduce mayúsculas y guiones</small>
                        <a href="#" class="btn button">Aplicar código</a>
                    </div>
                </div>
            </div>

            <div class="info">
                <h2>¿Necesitas más información?</h2>
                <p><a href="#" data-toggle="modal" data-target="#modal-entrega">¿Cuándo llegará mi pedido?</a></p>
                <p><a href="#" data-toggle="modal" data-target="#modal-devolucion">¿Puedo devolver mi pedido?</a></p>
                <p><a href="#" data-toggle="modal" data-target="#modal-pedidos">¿Necesito una cuenta para hacer pedidos?</a></p>
                <p><a href="#" data-toggle="modal" data-target="#modal-descuentos">¿Cómo puedo usar mi descuento?</a></p>
                
                <h2 class="mt-4">Formas de pago aceptadas</h2>
                <img src="<?php echo RUTA ?>/img/pagos.png" alt="pagos">
            </div>
        </section>
    </div>
</main>

<?php

require 'components/modals.php';
require 'components/footer.php';
require '../components/scripts.php';

?>