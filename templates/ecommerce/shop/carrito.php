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

	<title>Carrito de compra | Mi Tienda Online</title>
</head>
<body>
<?php require '../components/nav.php'; ?>

<main class="carrito container">
    <div class="row carro">
        <section class="articulos col-md-8">
            <h1>Tu carrito <span>2 artículos</span> </h1>

            <!-- <p>Parece que tu carrito está vacío. ¡Empieza a llenarlo! Inicia sesión en tu cuenta para recuperar los artículos que dejaste en el carrito la última vez que entraste.</p>
            <a href="<?php echo RUTA ?>" class="btn btn-lg button mb-5">Sigue comprando</a> -->

            <div class="articulo">
                <hr>
                
                <div class="row d-flex align-items-center">
                    <div class="col-lg-3 imagen">
                        <img src="<?php echo RUTA ?>/img/products/destacado1.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-6 informacion">
                        <h4>Producto 1</h4>
                        <p><span>Alto:</span> 2.00m</p>
                        <p><span>Ancho:</span> 6.45m</p>
                        <p><span>Color:</span> black / white <b>En stock <i class="fas fa-check"></i></b></p>

                        <div class="acciones">
                            <a href="#">Editar</a> |
                            <a href="#">Eliminar</a> |
                            <a href="#">Mover a la lista de deseos</a>
                        </div>
                    </div>
                    <div class="col-lg-1 cantidad">
                        <select name="unidades" id="unidades">
                            <option >Cantidad</option>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="col-lg-2 precio">
                        <h4>129.50€</h4>
                    </div>
                </div>
            </div>

            <div class="articulo">
                <hr>
                
                <div class="row d-flex align-items-center">
                    <div class="col-lg-3 imagen">
                        <img src="<?php echo RUTA ?>/img/products/destacado2.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-6 informacion">
                        <h4>Producto 2</h4>
                        <p><span>Alto:</span> 1.00m</p>
                        <p><span>Ancho:</span> 3.50m</p>
                        <p><span>Color:</span> gold / black <b>En stock <i class="fas fa-check"></i></b></p>

                        <div class="acciones">
                            <a href="#">Editar</a> |
                            <a href="#">Eliminar</a> |
                            <a href="#">Mover a la lista de deseos</a>
                        </div>
                    </div>
                    <div class="col-lg-1 cantidad">
                        <select name="unidades" id="unidades">
                            <option >Cantidad</option>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="col-lg-2 precio">
                        <h4>59.75€</h4>
                    </div>
                </div>
            </div>

            <a href="envio.php" class="btn btn-lg button mb-5">Continuar con la compra <i class="fas fa-arrow-right ml-2"></i></a>
        </section>
        
        <section class="pedido col-md-4">
            <div class="datos">
                <a href="envio.php" class="btn btn-lg button">Continuar con la compra <i class="fas fa-arrow-right ml-2"></i></a>

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

    <hr>
    
    <?php require '../components/recomendados.php'; ?>
</main>

<?php

require 'components/modals.php';
require '../components/footer.php';
require '../components/scripts.php';

?>