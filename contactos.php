<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="stylesheet" href="css/contactos.css">
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

<body><!----------------------------------- Menu de desplegable------------------>
<?php include('header.php') ?>
    <?php include('slide.php') ?>
    <?php include('social.php') ?>

    <section id="content">
        <section id="form"> <!-- ------formulario de contactos------------------->
            <form class="contact_form" oction="4" method="post">
                <ul id="form_nombres">
                    <li>
                        <h2>Siguenos y Contáctanos</h2>
                    </li>
                    <li>
                        <label form="nane">Nombre</label><br />
                        <input type="text" placeholder="Johan Ricardo'required " />

                    </li>

                    <li>
                        <label form="nane">Email</label><br />
                        <input type="email" name="email" placeholder="Jjrcardpd@.ejemplo.com " required />
                    </li>
                    <li>
                        <label form="nane">Website Web:</label><br />
                        <input type="url" name="web" placeholder="http://www.Jjrcardpd.ejemplo.com " required />
                    </li>
                    <li>
                        <label form="nane">Pedido:</label><br />
                        <select name="select">
                            <option value="value1">Capuchino Frio</option>
                            <option value="value2" selected>Caffe Helado</option>
                            <option value="value3">Espresso</option>
                        </select>
                    </li>
                    <li>
                        <label form="mensaje">Mensaje:</label><br />
                        <textarea name="Mensaje" cols="40" rows="6" required></textarea>
                    </li>
                </ul>
                <article id="redesSocialesContactos">
                    <a href="">
                        <h4 id="faceContaco"><img src="img/face.png" alt="">Sigueme en mi Facebook</h4>
                    </a>
                    <a href="">
                        <h4 id="whatsapContacto"><img src="img/whatsapp.png" alt="">Contactame en el whatsapp</h4>
                    </a>

                    <div class="container">
                        <label for="fecha">Fecha:</label>
                        <input type="date" id="fecha" />
                    </div>


                </article>


                <ul id="form_derecha"><!-- ------formulario de contactos derecho------------------->
                    <li>
                        <h2></h2>
                    </li>
                    <li>
                        <label class="required" for="name">Zona:</label><br />
                        <input type="text" id="name" class="input" name="name" value="" size="30" />
                        <!-- <span>Zona</span>-->
                    </li>
                    <li>
                        <label class="required" for="email">Direccion:</label><br />
                        <input id="email" class="input" name="name" type="text" value="" size="30" placeholder="C. Mariano Villca" required />

                    </li>
                    <li>

                        <label class="required" for="name">Numero:</label><br />                     
                       <input type="text" name="name" id="name" maxlength="3"  value=""  placeholder="Ej: 123" required />
                      
                       
                    </li>

                    <li>
                        <label class="required" for="name">Departamento:</label><br />
                        <select name="select">
                            <option value="value1">La Paz</option>
                            <option value="value2">Oruro</option>
                            <option value="value3">Cochabamba</option>
                            <option value="value3">Chuquisaca</option>
                            <option value="value3">Tarija</option>
                            <option value="value3">Cochabamba</option>
                            <option value="value3">Santa Cruz</option>
                            <option value="value3">Beni</option>
                            <option value="value3" selected>Pando</option>

                        </select>

                    </li>
                   

                    <li>
                        <button class="submit" type="submit">Enviar</button>
                    </li>
                </ul>
            </form>
            <div class="imagenMapa"><!-- -----Mapa localiizacion =------------------>
                <img src="img/LocalizacionMapa.jpg" alt="" srcset="">
            </div>
        </section> <!-- ----- icono social  face twiter whatsap -->
        <div class="social">
            <ul>
                <li><a href="http:/www." class="icon-facebook"><img src="img/face.png" alt="" srcset=""></a></li>
                <li><a href="http:/www." class="icon-twitter"><img src="img/twiter.png" alt="" srcset=""></a></li>
                <li><a href="http:/www." class="icon-googleplus"><img src="img/whatsapp.png" alt="" srcset=""></a>
                </li>
                <li><a href="http:/www." class="icon-pinter"><img src="img/camapan.png" alt="" srcset=""></a></li>
                <li><a href="http:/www." class="icon-emai"><img src="img/face.png" alt="" srcset=""></a></li>
            </ul>
        </div>
    </section>
    <div id="contenido">


    <?php include('footer.php') ?>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputFecha = document.getElementById('fecha');
            inputFecha.focus(); // Abre el calendario al cargar
            inputFecha.click(); // Simula el clic para abrir el calendario
        });
    </script>
</body>

</html>