<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes Somos</title>
    <link rel="stylesheet" href="css/quienesSomos.css">
    <!-- Attach our CSS -->
    <link rel="stylesheet" href="css/orbit-1.2.3.css">
    <link rel="stylesheet" href="css/demo-style.css">
    <link rel="stylesheet" href="css/CANVASweb.css">

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

<body>
<?php include('header.php') ?>
    <?php include('slide.php') ?>
    <?php include('social.php') ?>





    <section id="content">
        <section id="section1">
            <h2>Somos... </h2>
            <articleiv id="video">
                <!-------------Vida animal Video-->

                <video id="miVideo" controls muted autoplay loop>

                    <source src="media/Cappuccino.mp4" type="video/mp4">

                </video>
            </articleiv>
            <articleiv id="video1">
                <!-------------Vida animal Video-->

                <video id="miVideo1" controls muted autoplay loop>

                    <source src="media/espresso.mp4" type="video/mp4">

                </video>
            </articleiv>

            <articleiv id="segundoParrafo">
                <OL>
                    <h2>Para el Personal:</h2>
                    <li>"Puntualidad: Llegar a tiempo para garantizar una atención fluida."</li>
                    <li>"Uniforme: Usar el uniforme adecuado y mantener una buena higiene personal."</li>
                    <li>"Atención al Cliente: Ser amable, cortés y respetuoso con todos los clientes."</li>
                    <h2>Para los Clientes</h2>
                    <li>Respeto: Tratar al personal y a otros clientes con respeto"</li>
                    <li>"Consumo en el Local: Consumir los productos en el lugar designado y no llevar alimentos de fuera."</li>
                    <li>"Uso de Dispositivos Electrónicos: Usar dispositivos móviles de manera responsable y sin molestar a los demás."</li>
                    <h2>Para el Funcionamiento:</h2>
                    <li>"Horarios de Atención: Respetar los horarios de apertura y cierre de la cafetería."</li>
                    <li>"Control de Inventario: Llevar un registro detallado del inventario y reportar faltantes."</li>
                    <li>"Seguridad Alimentaria: Cumplir con las normativas de salud y seguridad alimentaria en la preparación y almacenamiento de alimentos."</li>
                </OL>
            </articleiv>

        </section>
        <article class="social">
            <ul>
                <li><a href="http:/www." class="icon-facebook"><img src="img/face.png" alt="" srcset=""></a></li>
                <li><a href="http:/www." class="icon-twitter"><img src="img/twiter.png" alt="" srcset=""></a></li>
                <li><a href="http:/www." class="icon-googleplus"><img src="img/whatsapp.png" alt="" srcset=""></a>
                </li>
                <li><a href="http:/www." class="icon-pinter"><img src="img/camapan.png" alt="" srcset=""></a></li>
                <li><a href="http:/www." class="icon-emai"><img src="img/face.png" alt="" srcset=""></a></li>
            </ul>
        </article
        >
    </section>



    <?php include('footer.php') ?>
    </div>
    </div>
</body>

</html>