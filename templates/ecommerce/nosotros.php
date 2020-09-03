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

    <title>Nosotros | Mi Tienda Online</title>
</head>
<body>
<?php require 'components/nav.php'; ?>

<main class="nosotros container">
    <section class="jumbotron card card-image" style="background-image: url(<?php echo RUTA ?>/img/banner.jpg);">
		<div class="text-white py-2">
			<h1 class="card-title">Nosotros</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem, optio vero odio nam sit officia accusamus.</p>
		</div>
    </section>
    
    <section class="empresa">
        <h2>Nuestra empresa</h2>
        
        <hr>
        
        <div class="row">
            <div class="col-md-5">
                <h5>Lorem ipsum</h5>
                <p>Responsive, Minimalism</p>
            </div>
        
            <div class="col-md-7">
                <p class="mb-5 pb-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et illo delectus, iusto pariatur deleniti quos cupiditate, explicabo ab cum voluptates odit sed minus, rerum corporis enim facere. Consequuntur, cupiditate provident. Unde cum minima ducimus libero saepe perspiciatis et cupiditate quibusdam vero incidunt similique, iure praesentium.</p>
            </div>
        
            <div class="col-md-5">
                <h5>Lorem ipsum</h5>
                <p>PHP, MySQL, Laravel</p>
            </div>
        
            <div class="col-md-7">
                <p class="mb-5 pb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, voluptatem soluta! Eligendi maxime, repudiandae rem dolorem omnis soluta, esse quod facilis corrupti similique blanditiis tenetur voluptatem eos expedita eum placeat consectetur. At unde nobis aliquid numquam vel deleniti veritatis nam minus iure voluptate. Repudiandae eius amet inventore, ad tempore velit eum voluptate cumque sed libero.</p>
            </div>
        
            <div class="col-md-5">
                <h5>Lorem ipsum</h5>
                <p>Andriod, iOS</p>
            </div>
        
            <div class="col-md-7">
                <p class="mb-5 pb-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque dolores aliquid eligendi voluptatibus deserunt soluta maxime magni quod, nemo quos ut cumque reiciendis quae consequatur labore quasi dolor.</p>
            </div>
        </div>
    </section>

    <section class="historia">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <ol class="timeline">
                    <li class="timeline-element">
                        <h5>Launched our website</h5>
                        <p><time datetime="2017-02-08">08 Feb 2017</time></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique. Explicabo amet ipsum fugiat aliquam alias.</p>
                    </li>

                    <li class="timeline-element">
                        <h5>Got the first 100 users</h5>
                        <p><time datetime="2017-08-17">17 Aug 2017</time></p>
                        <p><img class="img-fluid" src="<?php echo RUTA ?>/img/products/destacado1.jpg" alt="..."></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique. Explicabo amet ipsum fugiat aliquam alias.</p>
                    </li>

                    <li class="timeline-element">
                        <h5>Raised $1.4 million in seed funding</h5>
                        <p><time datetime="2018-03-26">26 Mar 2019</time></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique. Explicabo amet ipsum fugiat aliquam alias.</p>
                    </li>

                    <li class="timeline-element">
                        <h5>Team size increased to 20</h5>
                        <p><time datetime="2018-04-14">14 Apr 2019</time></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique. Explicabo amet ipsum fugiat aliquam alias.</p>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section class="equipo">
        <h2>Nuestro equipo</h2>

        <hr>

        <div class="row">
            <div class="col-md-3 mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" class="img-fluid mx-auto" alt="smaple image">
                
                <h5 class="font-weight-bold">Alicia Deyns</h5>
                <small>Co-funder & CEO</small>
                <p>Sed ut perspiciatis unde omnis natus accusantium.</p>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><i class="fab fa-twitter mx-2"></i></li>
                    <li><i class="fab fa-facebook-f mx-2"></i></li>
                    <li><i class="fab fa-instagram mx-2"></i></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="img-fluid mx-auto" alt="smaple image">
                
                <h5 class="font-weight-bold">Tommy Brian</h5>
                <small>Co-funder & CTO</small>
                <p>Sed ut perspiciatis unde omnis natus accusantium.</p>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><i class="fab fa-twitter mx-2"></i></li>
                    <li><i class="fab fa-facebook-f mx-2"></i></li>
                    <li><i class="fab fa-instagram mx-2"></i></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(4).jpg" class="img-fluid mx-auto" alt="smaple image">
                
                <h5 class="font-weight-bold">Kate Witson</h5>
                <small>Lead Developer</small>
                <p>Sed ut perspiciatis unde omnis natus accusantium.</p>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><i class="fab fa-twitter mx-2"></i></li>
                    <li><i class="fab fa-facebook-f mx-2"></i></li>
                    <li><i class="fab fa-instagram mx-2"></i></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(7).jpg" class="img-fluid mx-auto" alt="smaple image">
                
                <h5 class="font-weight-bold">Barbara Lenny</h5>
                <small>Designer</small>
                <p>Sed ut perspiciatis unde omnis natus accusantium.</p>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><i class="fab fa-twitter mx-2"></i></li>
                    <li><i class="fab fa-facebook-f mx-2"></i></li>
                    <li><i class="fab fa-instagram mx-2"></i></li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php

require 'components/footer.php';
require 'components/scripts.php';

?>