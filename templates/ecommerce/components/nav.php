<nav class="menu" id="menu">
    <div class="contenedor contenedor-botones-menu">
        <button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
        <a href="<?php echo RUTA; ?>" class="title-responsive" style="color: #000;font-weight: bold;padding-top: 10px; font-size: 21px;">Mi Tienda Online</a>
        <button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
    </div>

    <div class="contenedor contenedor-enlaces-nav">
        <div class="logo mr-5">
            <a href="<?php echo RUTA; ?>">Mi Tienda Online</a>
        </div>

        <div class="btn-departamentos" id="btn-departamentos">
            <p>Todas las <span>Categorías</span></p>
            <i class="fas fa-caret-down"></i>
        </div>

        <div class="enlaces ml-auto">
            <input type="text" name="busqueda" placeholder="Buscar...">
            <a href="<?php echo RUTA; ?>">Inicio</a>
            <a href="<?php echo RUTA; ?>/contacto.php">Contacto</a>
            <a href="<?php echo RUTA; ?>/my-account/login.php">Iniciar sesión</a>
            <a href="<?php echo RUTA; ?>/shop/carrito.php"><i class="fas fa-shopping-cart"></i> <span class="ml-1">Carrito</span></a>
        </div>
    </div>

    <div class="contenedor contenedor-grid">
        <div class="grid" id="grid">
            <div class="categorias">
                <button class="btn-regresar"><i class="fas fa-arrow-left"></i> Volver</button>
                <h3 class="subtitulo">Categorias</h3>

                <a href="#" data-categoria="cortinas">Cortinas <i class="fas fa-angle-right"></i></a>
                <a href="#" data-categoria="enrollables">Enrollables <i class="fas fa-angle-right"></i></a>
                <a href="#" data-categoria="paneles-japoneses">Paneles japoneses <i class="fas fa-angle-right"></i></a>
                <a href="#" data-categoria="estores">Estores <i class="fas fa-angle-right"></i></a>
                <a href="#" data-categoria="verticales">Verticales <i class="fas fa-angle-right"></i></a>
                <a href="#" data-categoria="venecianas">Venecianas <i class="fas fa-angle-right"></i></a>
                <a href="#" data-categoria="noche-y-dia">Noche y día <i class="fas fa-angle-right"></i></a>
                <a href="#" data-categoria="mecanismos">Mecanismos <i class="fas fa-angle-right"></i></a>
                <a href="#" data-categoria="ropa-de-cama">Ropa de cama <i class="fas fa-angle-right"></i></a>
                <a href="#" data-categoria="alfombras">Alfombras <i class="fas fa-angle-right"></i></a>
            </div>

            <div class="contenedor-subcategorias">
                <div class="subcategoria " data-categoria="cortinas">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Cortinas</h3>
                        <a href="<?php echo RUTA; ?>/categoria.php">Laptops</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Tablets</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Computadoras de Escritorio</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Monitores</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Componentes</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/tecnologia-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/tecnologia-galeria-1.png" alt="">
                        </a>
                        <a href="categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/tecnologia-galeria-2.png" alt="">
                        </a>
                        <a href="categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/tecnologia-galeria-3.png" alt="">
                        </a>
                        <a href="categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/tecnologia-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="enrollables">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Enrollables</h3>
                        <a href="<?php echo RUTA; ?>/categoria.php">Top Sellers</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Ciencia Ficcion</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Fantasia</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Miedo</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/libros-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/libros-galeria-1.png" alt="">
                        </a>
                        <a href="categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/libros-galeria-2.png" alt="">
                        </a>
                        <a href="categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/libros-galeria-3.png" alt="">
                        </a>
                        <a href="categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/libros-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="paneles-japoneses">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Paneles japoneses</h3>
                        <a href="<?php echo RUTA; ?>/categoria.php">Ropa</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Zapatos</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Accesorios</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Relojes</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/ropa-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/ropa-galeria-1.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/ropa-galeria-2.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/ropa-galeria-3.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/ropa-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="estores">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Estores</h3>
                        <a href="<?php echo RUTA; ?>/categoria.php">Cocina</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Electrodomesticos</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Limpieza</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Baño</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Decoracion</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Arte</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Manualidades</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Jardin</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/hogar-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/hogar-galeria-1.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/hogar-galeria-2.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/hogar-galeria-3.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/hogar-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="verticales">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Verticales</h3>
                        <a href="<?php echo RUTA; ?>/categoria.php">Juguetes</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Juegos de Mesa</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Aire Libre</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Muñecas</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/juegos-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/juegos-galeria-1.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/juegos-galeria-2.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/juegos-galeria-3.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/juegos-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="venecianas">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Venecianas</h3>
                        <a href="<?php echo RUTA; ?>/categoria.php">Cuidado de la Piel</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Maquillaje</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Lociones</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Shampoo</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/belleza-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/belleza-galeria-1.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/belleza-galeria-2.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/belleza-galeria-3.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/belleza-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="noche-y-dia">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Noche y día</h3>
                        <a href="<?php echo RUTA; ?>/categoria.php">Alimentos</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Bebidas</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/comida-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/comida-galeria-1.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/comida-galeria-2.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/comida-galeria-3.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/comida-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="mecanismos">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Mecanismos</h3>
                        <a href="<?php echo RUTA; ?>/categoria.php">Ropa</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Zapatos</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Accesorios</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Relojes</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/ropa-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/ropa-galeria-1.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/ropa-galeria-2.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/ropa-galeria-3.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/ropa-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria " data-categoria="ropa-de-cama">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Ropa de cama</h3>
                        <a href="<?php echo RUTA; ?>/categoria.php">Laptops</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Tablets</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Computadoras de Escritorio</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Monitores</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Componentes</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/tecnologia-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/tecnologia-galeria-1.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/tecnologia-galeria-2.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/tecnologia-galeria-3.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/tecnologia-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="alfombras">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Alfombras</h3>
                        <a href="<?php echo RUTA; ?>/categoria.php">Juguetes</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Juegos de Mesa</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Aire Libre</a>
                        <a href="<?php echo RUTA; ?>/categoria.php">Muñecas</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/juegos-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/juegos-galeria-1.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/juegos-galeria-2.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/juegos-galeria-3.png" alt="">
                        </a>
                        <a href="<?php echo RUTA; ?>/categoria.php">
                            <img src="<?php echo RUTA; ?>/img/nav/juegos-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>