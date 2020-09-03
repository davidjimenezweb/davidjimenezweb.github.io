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

	<title>Pago | Mi Tienda Online</title>
</head>
<body>
<?php require '../components/nav.php'; ?>

<main class="pagos container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-uppercase"><a href="<?php echo RUTA ?>/shop/envio.php"><span>1</span> Envío</a></li>
            <li class="breadcrumb-item text-uppercase"><a href="<?php echo RUTA ?>/shop/pago.php"><span>2</span> Pago</a></li>
            <li class="breadcrumb-item text-uppercase"><span>3</span> Pedido realizado</li>
        </ol>
    </nav>

    <hr class="pb-3">

    <div class="row pago">
        <section class="datos col-md-8">
            <h1>Método de pago</h1>

            <hr>

            <form action="realizado.php" method="POST" class="form-pago">
                <div class="row mx-auto">
                    <div class="col-md-7 titulo custom-control custom-radio">
                        <input type="radio" name="tipo-pago" value="tarjeta" class="custom-control-input" id="tarjeta">
                        <label class="custom-control-label" for="tarjeta">Credit / debit card <span>(más popular)</span></label>
                        <p>Si tu banco utiliza el sistema 3D Secure para verificar tu información, se abrirá otra ventana.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="<?php echo RUTA ?>/img/pagos.png" alt="pagos" class="img-fluid">
                    </div>
                </div>

                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" name="numero" id="numero" class="form-control" placeholder="Número de su tarjeta" require>
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" require>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="mes-caducidad">Mes</label>
                        <select name="mes-caducidad" id="mes-caducidad" class="custom-select" placeholder="Mes" require>
                            <option selected>Mes</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="anyo-caducidad">Año</label>
                        <select name="anyo-caducidad" id="anyo-caducidad" class="custom-select" placeholder="Año" require>
                            <option selected>Año</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cvv">CVV</label>
                        <input type="text" name="cvv" id="cvv" class="form-control" placeholder="CVV" require>
                    </div>
                </div>

                <hr>

                <div class="row efectivo mx-auto">
                    <div class="col-md-8 titulo custom-control custom-radio">
                        <input type="radio" name="tipo-pago" value="reembolso" class="custom-control-input" id="efectivo">
                        <label class="custom-control-label" for="efectivo">Entrega contra reembolso</label>
                        <p>Paga en efectivo en el mopmento de la entrega. No necesitas realizar pagos online. Recuerda que en caso de devolución deberás facilitarnos tus datos bancarios para que podamos tramitar el reembolso.</p>
                    </div>
                    <div class="col-md-4 +">
                        <img src="<?php echo RUTA ?>/img/pagos.png" alt="pagos" class="img-fluid">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-lg button">Pagar <i class="fas fa-arrow-right ml-2"></i></button>
                <p class="mb-md-0 mb-5">Al hacer click en Comprar aceptas los <a href="#">términos y condiciones de la página</a>.</p>
            </form>
        </section>
        
        <section class="sesion col-md-4">
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

            <div class="envio">
                <h2>Dirección de envio:</h2>
                <div class="resumen">
                    <p><b>Nombre:</b> John Doe</p>
                    <p><b>Calle:</b> C/ Fake, 123</p>
                    <p><b>Ciudad:</b> Branson, 12345, Missouri</p>
                    <p><b>Teléfono:</b> 612 345 678</p>
                </div>
            </div>

            <div class="envio">
                <h2>Dirección de facturación:</h2>
                <div class="resumen">
                    <p><b>Nombre:</b> John Doe</p>
                    <p><b>Calle:</b> C/ Fake, 123</p>
                    <p><b>Ciudad:</b> Branson, 12345, Missouri</p>
                    <p><b>Teléfono:</b> 612 345 678</p>
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