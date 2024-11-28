<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="css/orbit-1.2.3.css">
    <link rel="stylesheet" href="css/demo-style.css">
    <link rel="stylesheet" href="css/CANVASweb.css">
    <link rel="stylesheet" href="css/galeria.css">

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
            <h2>Galeria de imagenes</h2>
            <!---------ejemplo1-->
            <div class="contenedor-img ejemplo-4">
                <img src="img/imgCafe/capuchino/cap (1).jpg" />
                <div class="mascara">
                    <h3>Capuchino Clásico</h3>
                    <p>Capuchino Clásico: Hecho con partes iguales de espresso, leche vaporizada y espuma de leche. Se sirve en tazas pequeñas.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!---------ejemplo2-->
            <div class="contenedor-img ejemplo-4">
                <img src="img/imgCafe/capuchino/cap (1).png" />
                <div class="mascara"></div>
                <div class="contenido">
                    <h2>Capuchino Seco</h2>
                    <p>Capuchino Seco: Contiene más espuma de leche que leche vaporizada, resultando en un sabor más intenso del café.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!------jemplo3------->
            <div class="contenedor-img ejemplo-4">
                <img src="img/imgCafe/capuchino/cap (10).jpg" />
                <div class="mascara">
                    <h2>Capuchino Húmedo:</h2>
                    <p>Capuchino Húmedo: Tiene más leche vaporizada que espuma, lo que lo hace más cremoso y suave.</p>
                    <a href="#" class="link">Ver más</a>
                </div>
            </div>
            <!---------ejemplo4-->
            <div class="contenedor-img ejemplo-3">
                <img src="img/imgCafe/capuchino/cap (2).jpg " />
                <div class="mascara">
                    <h2>Capuchino de Chocolate</h2>
                    <p>Capuchino de Chocolate: Se le añade chocolate en polvo o sirope de chocolate, dándole un sabor dulce y chocolatoso.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>

            <div class="contenedor-img ejemplo-3">
                <img src="img/imgCafe/capuchino/cap (3).jpg" />
                <div class="mascara">
                    <h2>Capuchino de Vainilla</h2>
                    <p>Capuchino de Vainilla: Se mezcla con sirope de vainilla, aportando un toque dulce y aromático.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!-------------ejemplo5-->
            <div class="contenedor-img ejemplo-3">
                <img src="img/imgCafe/capuchino/cap (4).jpg" />
                <div class="mascara">
                    <h2>Capuchino con Especias</h2>
                    <p>Capuchino con Especias: Puede incluir canela, nuez moscada o incluso cardamomo, para un perfil de sabor más exótico.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!---------ejemplo6-->
            <div class="contenedor-img ejemplo-1">
                <img src="img/imgCafe/capuchino/cap (7).jpg" />
                <div class="mascara">
                    <h2>Capuchino Frío</h2>
                    <p>Capuchino Frío: Una versión helada que se prepara con café frío, leche y hielo, ideal para días calurosos.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!---------ejemplo7-->
            <div class="contenedor-img ejemplo-1">
                <img src="img/imgCafe/capuchino/cap (6).jpg" />
                <div class="mascara"></div>
                <div class="contenido">
                    <h2>Capuchino Vegano</h2>
                    <p>Capuchino Vegano: Hecho con leches vegetales como almendra, soja o avena, en lugar de leche de vaca.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>

             <!---------ejemplo4-->
             <div class="contenedor-img ejemplo-1">
                <img src="img/imgCafe/capuchino/cap (9).jpg" />
                <div class="mascara">
                    <h2>Capuchino Seco</h2>
                    <p>Capuchino Seco: Contiene más espuma de leche que leche vaporizada, resultando en un sabor más intenso del café.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>

        </section>
        <?php include('footer.php') ?>
    </div>
</body>

</html>