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

	<title>Producto | Mi Tienda Online</title>
</head>
<body>
<?php require 'components/nav.php'; ?>

<main class="producto container d-flex align-items-center">
    <div class="row d-flex align-items-center">
        <!-- Carousel -->
        <section class="col-md-6">
            <a href="<?php echo RUTA ?>" class="volver"><i class="fas fa-chevron-circle-left"></i> Volver a atrás</a>
            <div id="carousel-thumb1" class="carousel slide carousel-fade carousel-thumbnails pb-4" data-ride="carousel">
                <!-- Slides -->
                <div class="carousel-inner text-center text-md-left" role="listbox">
                    <div class="carousel-item active">
                        <img src="<?php echo RUTA ?>/img/products/destacado1.jpg" alt="First slide" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo RUTA ?>/img/products/mas-vendido1.jpg" alt="Second slide" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo RUTA ?>/img/products/destacado3.jpg" alt="Third slide" class="img-fluid">
                    </div>
                </div>
                <!-- /.Slides -->
        
                <!-- Thumbnails -->
                <a class="carousel-control-prev" href="#carousel-thumb1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!-- /.Thumbnails -->
            </div>
            
            <div class="row mb-4">
                <div class="d-flex">
                    <figure class="col-md-4">
                        <a href="<?php echo RUTA ?>/img/products/destacado1.jpg" data-size="1600x1067">
                            <img src="<?php echo RUTA ?>/img/products/destacado1.jpg" class="img-fluid">
                        </a>
                    </figure>
                    <figure class="col-md-4">
                        <a href="<?php echo RUTA ?>/img/products/mas-vendido1.jpg" data-size="1600x1067">
                            <img src="<?php echo RUTA ?>/img/products/mas-vendido1.jpg" class="img-fluid">
                        </a>
                    </figure>
                    <figure class="col-md-4">
                        <a href="<?php echo RUTA ?>/img/products/destacado3.jpg" data-size="1600x1067">
                            <img src="<?php echo RUTA ?>/img/products/destacado3.jpg" class="img-fluid">
                        </a>
                    </figure>
                </div>
            </div>
        </section>
        <!-- /.Carousel -->
    
        <section class="col-md-6 text-center text-md-left">
            <h1>Producto</h1>
            
            <span>$449</span>
            <small><s>$789</s></small>
    
            <div class="caracteristicas"> 
                <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quis harum beatae dolor.</p>   
                <p><strong>Altura: </strong>180cm</p>
                <p><strong>Ancho: </strong>300cm</p>
                <p><strong>Color: </strong>Blanco</p>
                <p><strong>Disponibilidad: </strong>En stock</p>
                
                <div class="mt-5 mb-4">
                    <a href="#" class="button"><i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Añadir al carrito</a>
                </div>  
            </div>
        </section>
    </div>
</main>

<div class="datos-prod container">
    <section class="descripcion">
        <h2>Descripción</h2>
        
        <div class="row d-flex align-items-center">
            <div class="col-md-7">
                <h3>Producto</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim itaque nisi debitis nam, ut molestias sint. Laudantium sint dolor maxime ex suscipit a id. Voluptates voluptatum porro, cum officiis, atque, perspiciatis sit accusamus nesciunt est quas beatae minus repellendus architecto repudiandae neque corrupti quae incidunt?</p>
            </div>
        
            <div class="col-md-5">
                <img src="<?php echo RUTA ?>/img/products/destacado1.jpg" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="relacionados">
        <h2>Los clientes también compraron</h2>
        
        <div class="productos row text-center">
            <div class="col-md-3">
                <a href="producto.html">
                    <div class="producto">
                        <img src="<?php echo RUTA ?>/img/products/destacado1.jpg" class="img-fluid" alt="">
                        <h5>Producto</h5>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                        <p>195<span>€</span></p>
                    </div>
                </a>
            </div>
        
            <div class="col-md-3">
                <a href="producto.html">
                    <div class="producto">
                        <img src="<?php echo RUTA ?>/img/products/destacado2.jpg" class="img-fluid" alt="">
                        <h5>Producto</h5>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, atque?</h6>
                        <p>170<span>€</span></p>
                    </div>
                </a>
            </div>
        
            <div class="col-md-3">
                <a href="producto.html">
                    <div class="producto">
                        <img src="<?php echo RUTA ?>/img/products/destacado3.jpg" class="img-fluid" alt="">
                        <h5>Producto</h5>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, tempora hic.</h6>
                        <p>220<span>€</span></p>
                    </div>
                </a>
            </div>
        
            <div class="col-md-3">
                <a href="producto.html">
                    <div class="producto">
                        <img src="<?php echo RUTA ?>/img/products/destacado4.jpg" class="img-fluid" alt="">
                        <h5>Producto</h5>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing.</h6>
                        <p>400<span>€</span></p>
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>

<?php

require 'components/footer.php';
require 'components/scripts.php';

?>