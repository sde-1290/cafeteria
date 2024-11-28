<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/CANVASweb.css">
    <!-- Attach our CSS -->
    <link rel="stylesheet" href="css/orbit-1.2.3.css">
    <link rel="stylesheet" href="css/demo-style.css">

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
    <article id="content">
        <section id="section1">
            <h2>Historia del cafe:</h2>
        </section>


        <section id="section2">
            <h2>Lo mejor del cafe</h2>
            <img src="img/imgCafe/caf (1).jpg" alt="">
            <p>Taza de Café: Generalmente de cerámica o porcelana, ideal para café caliente.
                Taza de Espresso: Más pequeña, diseñada para servir espresso.
                Taza de Capuchino: Más grande, permite la mezcla de café y leche espumada.
                Taza de Viaje: Aislada, diseñada para llevar café y mantenerlo caliente.:</p>
        </section>
        <section id="section3">
            <h2>Una buena excusa</h2>
            <img src="img/imgCafe/caf (1).jpeg" alt="">
            <p>Una taza de café no es solo un recipiente, sino un elemento integral en la experiencia de disfrutar del café, con aspectos que abarcan desde su material y diseño hasta su función y el contexto cultural en el que se utiliza.</p>
        </section>
        <section id="section4">
            <article>
                <img src="img/imgCafe/caf (1).webp" alt="">
                <p>
                    La historia del café es fascinante y se remonta a siglos atrás. Se cree que su origen se encuentra en la región de Kaffa, en Etiopía, donde los habitantes descubrían los efectos energizantes de los granos de café. Según la leyenda, un pastor llamado Kaldi notó que sus cabras se volvían más enérgicas después de comer las bayas de un arbusto.

                    El café se extendió a través de la península arábiga, donde comenzó a cultivarse en Yemen en el siglo XV. Los comerciantes árabes lo llevaron a Persia, Egipto y Turquía, convirtiéndose en una bebida popular en los cafés, conocidos como "qahveh khaneh", que se convirtieron en centros de reunión cultural.
                </p>
            </article>
        </section>
    </article>

    <?php include('footer.php') ?>

</body>

</html>