<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expreso</title>
    <link rel="stylesheet" href="css/orbit-1.2.3.css">
    <link rel="stylesheet" href="css/demo-style.css">
    <link rel="stylesheet" href="css/CANVASweb.css">
    <link rel="stylesheet" href="css/espreso.css">

    <!-- Attach necessary JS -->
    <script type="text/javascript" src="jquery/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.orbit-1.2.3.min.js"></script>

    <!--[if IE]>
             <style type="text/css">
                 .timer { display: none !important; }
                 div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
            </style>
        <![endif]-->

    <!-- Run the plugin -->
    <script type="text/javascript">
        $(window).load(function() {
            $('#featured').orbit();
        });
    </script>
</head>

<body><!----------------------------------- Menu de desplegable------------------>
<?php include('header.php') ?>
    <?php include('slide.php') ?>
    <?php include('social.php') ?>


    <section id="content">
        <section id="albun"> <!-- ------formulario de galeria------------------->
            <H2>Cafe Espreso</H2>
            <!---------ejemplo1-->
            <div class="contenedor-img ejemplo-4-1">
                <img src="img/imgCafe/espresso/esp (1).jpg" />
                <div class="mascara">
                    <h3>Ejemplo 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!---------ejemplo2-->
            <div class="contenedor-img ejemplo-4-1">
                <img src="img/imgCafe/espresso/esp (1).webp" />
                <div class="mascara"></div>
                <div class="contenido">
                    <h2>Ejemplo 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!------jemplo3------->
            <div class="contenedor-img ejemplo-4-1">
                <img src="img/imgCafe/espresso/esp (2).jpg" />
                <div class="mascara">
                    <h2>Hover Effects</h2>
                    <p>Efectos hover para tus imágenes, portafolio, galerias.</p>
                    <a href="#" class="link">Ver más</a>
                </div>
            </div>
            <!---------ejemplo4-->
            <div class="contenedor-img ejemplo-6">
                <img src="img/imgCafe/espresso/esp (9).jpg " />
                <div class="mascara">
                    <h2>Ejemplo 4</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>

            <div class="contenedor-img ejemplo-6">
                <img src="img/imgCafe/espresso/esp (3).jpg" />
                <div class="mascara">
                    <h2>Ejemplo 4-1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!-------------ejemplo5-->
            <div class="contenedor-img ejemplo-6">
                <img src="img/imgCafe/espresso/esp (4).jpg" />
                <div class="mascara">
                    <h2>Ejemplo 5</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!---------ejemplo6-->
            <div class="contenedor-img ejemplo-7">
                <img src="img/imgCafe/espresso/esp (6).jpg" />
                <div class="mascara">
                    <h2>Ejemplo 6</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!---------ejemplo7-->
            <div class="contenedor-img ejemplo-7">
                <img src="img/imgCafe/espresso/esp (7).jpg" />
                <div class="mascara"></div>
                <div class="contenido">
                    <h2>Ejemplo 7</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>

             <!---------ejemplo4-->
             <div class="contenedor-img ejemplo-7">
                <img src="img/imgCafe/espresso/esp (8).jpg" />
                <div class="mascara">
                    <h2>Ejemplo 4</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>

        </section>

        <?php include('footer.php') ?>
    </section>
    </div>
</body>

</html>