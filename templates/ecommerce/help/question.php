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

	<title>Pregunta | Mi Tienda Online</title>
</head>
<body>
<?php require '../components/nav.php'; ?>

<main class="question">
    <div class="pregunta container mb-5">
        <a href="<?php echo RUTA ?>/help" class="volver"><i class="fas fa-chevron-circle-left"></i> Volver a atrás</a>
        <section class="d-flex titulo">
            <h1>¿Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae?</h1>
            <p class="ml-auto mt-md-1 mt-2 mb-0">Última actualización: <b>06/01/20</b></p>
        </section>

        <hr>

        <section class="cuerpo">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In harum nihil repellendus a at eveniet!</p>
            
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur quod reprehenderit necessitatibus saepe, officia voluptatem veniam commodi ea tempora totam debitis et! Mollitia, iusto ipsa nihil nemo fuga labore obcaecati illum deleniti possimus assumenda, magnam ullam nobis aliquid quas doloribus?</p>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quos cum reiciendis ea voluptate recusandae velit voluptatum repellat sequi repudiandae eum ducimus sint labore laborum quis nostrum, nemo ex aperiam natus perferendis at id? Rem, eligendi suscipit id dolores totam voluptatem reiciendis aliquid beatae ipsa omnis laborum nisi, magni blanditiis molestiae incidunt vero pariatur quia harum adipisci quos repellat tenetur officiis vel exercitationem. Ipsum, accusamus. Illum perspiciatis, recusandae necessitatibus eligendi deserunt dolor! Placeat obcaecati officia enim velit quia eveniet dolor aliquam quod excepturi doloribus, cupiditate, eius dolorum iusto nihil nisi.</p>
            
            <p>Lorem ipsum dolor sit amet:</p>
            
            <div class="table-responsive">
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Lorem ipsum dolor</th>
                            <th scope="col">Lorem ipsum</th>
                            <th scope="col">Lorem ipsum dolor sit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@jdn</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, quod dolores sequi suscipit deserunt ea? Enim repellat libero impedit aperiam?</p>
            
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente blanditiis voluptas cupiditate cum placeat? Velit porro, nostrum laborum debitis tempora ad quae iusto est dignissimos sit libero doloremque reiciendis, nisi id amet eius explicabo maxime consequuntur architecto aut voluptatum. Adipisci tempora maiores laborum at dolor culpa laudantium vitae possimus deleniti deserunt voluptatibus voluptatum repellendus quibusdam nesciunt totam, provident amet reprehenderit, numquam consequuntur debitis modi sit. Consequatur sit itaque, hic dolorem fugit facere libero id molestiae unde ipsum. Eos veniam atque inventore, expedita, molestiae harum repudiandae cum ducimus nemo nulla ullam distinctio. Labore error eius alias ipsum fugiat quia molestiae enim?</p>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus minus odit reiciendis. Suscipit deserunt voluptas impedit.</p>
        </section>

        <hr>
    </div>

    <div class="container">
        <?php require 'frecuentes.php'; ?>
    </div>
</main>

<?php

require '../components/footer.php';
require '../components/scripts.php';

?>