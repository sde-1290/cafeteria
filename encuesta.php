<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta Cafetería</title>
    <style>
        
        body {
            font-family:'Times New Roman', Times, serif, sans-serif;
            background: linear-gradient(135deg, #f6f6f6, #e8e8e8); /* Fondo degradado suave */
            margin: 0;
            padding: 100px;
            color: #333;
        }

        h1 {
            text-align: center;
            color:#a05712; /* Un gris oscuro para el encabezado */
            font-size: 4em;
            margin-bottom: 40px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        .question {
            display: none;
            margin-bottom: 25px;
            background-color:antiquewhite;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .answers {
            margin-left: 20px;
            font-size: 1.1em;
        }

        label {
            font-size: 16px;
            margin-right: 10px;
            color: #555;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 15px 30px;
            font-size: 18px;
            background-color: #3498db; /* Azul vibrante */
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #2980b9; /* Azul más oscuro al pasar el ratón */
            transform: scale(1.05); /* Efecto de aumento al pasar el ratón */
        }

        .message {
            text-align: center;
            font-size: 18px;
            color: #27ae60; /* Verde para el mensaje de éxito */
            display: none;
            padding: 35px;
            background-color: #ecf9ec;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            width: 70%;
            margin: 30px auto;
        }

        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1.1em;
            resize: vertical;
            box-sizing: border-box;
        }

        textarea:focus {
            border-color: #3498db;
        }
        
        /*================== Pie de pagina ==================================*/
/*================== Pie de pagina ==================================*/
#pie {
    position: absolute;
    width: 100%;
    height: 50px;
    bottom: 0px;
    left: 0;
    padding: 1px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    text-align: center;
    /* color de onde del menu horizontal*/
    background: linear-gradient(to bottom, #e69865 2%, #925504 21%, #ad5c10d7 41%, #925504 65%, #a05712 95%);
    color: white;
    padding: 20px;


}


#pie #derechos a {
    
    text-decoration: none;
    

}


#pie #derechos p {
    position: relative;
    text-align: center;

    color: #fffbfb;
    font-weight: bold;
    font-size: 18px;
    color: white;
    text-shadow:
        -1px -1px 0 #000,
        1px -1px 0 #000,
        -1px 1px 0 #000,
        1px 1px 0 #000;
    /* Borde negro alrededor del texto */


}
#fixedMenu {
    /* Asegura que el menú esté por encima de otros elementos */
    position: fixed;
    top: 0px;/* altura para  de el menu horizontal nav */
    left: 0;
    width: 100%;
    height: 0px;
     /* color de onde del menu horizontal*/
    background: linear-gradient(to bottom, #e69865 2%, #925504 21%, #ad5c10d7 41%, #925504 65%, #a05712 95%);
    color: white;
    padding: 40px ;
    z-index: 1000;

}

#fixedMenu ul {
    /* Centra los elementos del menú horizontalmente */
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;

}

#fixedMenu ul li {
    margin: 0 15px
}

#fixedMenu ul li a {
    color: white;
    text-decoration:none;
    
    padding: 10px 20px 10px 20px;;/* espacion entre letras del sub menu */
    display: block;
}

#fixedMenu ul li a:hover {/*color de fondo de los menus cuando pasa el puntero del mouse por encima*/
    background-color: #664c1b;
    padding: 10px 20px 10px 20px;
    border-radius: 10% solid #fdfdfd;
}

#boton_lista li ul {
    /* ocultar los submenus de el menu */
    display: none;
    position: absolute;
    min-width: 140px;
}

#boton_lista li:hover ul {
    /* color de fondo del submenu */
    display: block;
    background: rgb(240, 173, 49);
    padding: 5px;
}

#boton_lista {
    position: relative;
    top: -100px;/* alineacion  del menu */
    
}

#boton_lista li ul li {
    position: relative;
    

}



/*------------------ color de los subtitulos h2-----------------*/
section {
    margin: 50px 0;
}

h2 {
    color: #000000;
}

p {
    /*justifica el texto de los parrafos*/
    text-align: justify;
}

/*=========================  Logotipo y lema ====================================*/
#logotipo {
    position: relative;
    left: 267px;
    top: -40px;


}


#logotipo img {
    height: 80px;
}

#logo {
    display: flex;
    align-items: center;
    justify-content:center;
    /*aliniar al centro el logo*/
    position:relative;
    top: 75px;
}



    </style>
</head>
<body>
<header id="contenido_pincipal">
    <nav id="fixedMenu">
        <div id="logotipo">
            <img src="img/logo.png" alt="">
        </div>
        <ul id="boton_lista">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Menu</a>
                <ul>
                    <li><a href="expreso.php">Expreso</a></li>
                    <li><a href="capuchino.php">Capuchino</a></li>

                </ul>
            </li>
            <li><a href="galeria.php">Galeria</a>

            </li>
            
            <li><a href="quinesSomos.php">Quienes somos</a></li>
            <li><a href="contactos.php">Contactos</a></li>
            
        </ul>
    </nav>

    <div id="logo">

        <img src="img/log.png" alt="">
    </div>
    <div id="lema">
    </div>


    <h1>Encuesta de la Cafetería</h1>

    <form id="surveyForm">
        
        <!-- Pregunta 1 -->
        <div id="question1" class="question">
            <p>1. ¿Te ha gustado el café que has probado en nuestra cafetería?</p>
            <div class="answers">
                <input type="radio" id="cafe_satisfecho" name="satisfaccion_cafe" value="satisfecho">
                <label for="cafe_satisfecho">Sí, me ha gustado</label><br>
                <input type="radio" id="cafe_no_satisfecho" name="satisfaccion_cafe" value="no_satisfecho">
                <label for="cafe_no_satisfecho">No, no me ha gustado</label><br>
            </div>
            <button type="button" onclick="nextQuestion(2)">Siguiente</button>
        </div>

        <!-- Pregunta 2 -->
        <div id="question2" class="question">
            <p>2. ¿Qué mejorarías en el sabor del café?</p>
            <div class="answers">
                <input type="checkbox" id="mas_fluidez" name="mejoras_cafe" value="mas_fluidez">
                <label for="mas_fluidez">Más fluidez (menos amargo)</label><br>
                <input type="checkbox" id="menos_azucar" name="mejoras_cafe" value="menos_azucar">
                <label for="menos_azucar">Menos azúcar</label><br>
                <input type="checkbox" id="mas_variedad" name="mejoras_cafe" value="mas_variedad">
                <label for="mas_variedad">Más variedad de cafés</label><br>
                <input type="checkbox" id="mas_temperatura" name="mejoras_cafe" value="mas_temperatura">
                <label for="mas_temperatura">Más temperatura (más caliente)</label><br>
            </div>
            <button type="button" onclick="nextQuestion(3)">Siguiente</button>
        </div>

        <!-- Pregunta 3 -->
        <div id="question3" class="question">
            <p>3. ¿Qué tipo de comida te gustaría que incluyéramos en el menú?</p>
            <div class="answers">
                <input type="checkbox" id="vegan" name="comida_menu" value="vegan">
                <label for="vegan">Opciones Veganas</label><br>
                <input type="checkbox" id="desayuno" name="comida_menu" value="desayuno">
                <label for="desayuno">Desayunos completos</label><br>
                <input type="checkbox" id="snacks" name="comida_menu" value="snacks">
                <label for="snacks">Snacks o aperitivos</label><br>
                <input type="checkbox" id="postres" name="comida_menu" value="postres">
                <label for="postres">Postres</label><br>
            </div>
            <button type="button" onclick="nextQuestion(4)">Siguiente</button>
        </div>

        <!-- Pregunta 4 -->
        <div id="question4" class="question">
            <p>4. ¿Te gustaría que tuviéramos música ambiental en la cafetería?</p>
            <div class="answers">
                <input type="radio" id="musica_si" name="musica" value="si">
                <label for="musica_si">Sí, me gustaría</label><br>
                <input type="radio" id="musica_no" name="musica" value="no">
                <label for="musica_no">No, no me gustaría</label><br>
            </div>
            <button type="button" onclick="nextQuestion(5)">Siguiente</button>
        </div>

        <!-- Pregunta 5 -->
        <div id="question5" class="question">
            <p>5. ¿Cómo calificarías el ambiente de la cafetería?</p>
            <div class="answers">
                <input type="radio" id="ambiente_1" name="ambiente" value="1">
                <label for="ambiente_1">1 - Muy malo</label><br>
                <input type="radio" id="ambiente_2" name="ambiente" value="2">
                <label for="ambiente_2">2 - Malo</label><br>
                <input type="radio" id="ambiente_3" name="ambiente" value="3">
                <label for="ambiente_3">3 - Aceptable</label><br>
                <input type="radio" id="ambiente_4" name="ambiente" value="4">
                <label for="ambiente_4">4 - Bueno</label><br>
                <input type="radio" id="ambiente_5" name="ambiente" value="5">
                <label for="ambiente_5">5 - Excelente</label><br>
            </div>
            <button type="button" onclick="nextQuestion(6)">Siguiente</button>
        </div>

        <!-- Pregunta 6 -->
        <div id="question6" class="question">
            <p>6. ¿Tienes algún comentario adicional para mejorar la cafetería?</p>
            <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea><br>
            <button type="submit">Enviar Encuesta</button>
        </div>

    </form>

    <div id="thankYouMessage" class="message">
        <p>¡Gracias por completar nuestra encuesta! Con tu opinion nos  hayudas a mejorar la cafeteria y a ser mejores para los clientes en el tema del servicio al cliente y al menu de nuestra cafeteria.</p>
    </div>

    <script>
        // Función para mostrar la siguiente pregunta y ocultar la anterior
        function nextQuestion(questionNumber) {
            // Ocultar la pregunta actual
            document.getElementById('question' + (questionNumber - 1)).style.display = 'none';
            // Mostrar la siguiente pregunta
            document.getElementById('question' + questionNumber).style.display = 'block';
        }

        // Función para mostrar el mensaje final después de enviar la encuesta
        function showThankYouMessage(event) {
            event.preventDefault(); // Evita que el formulario se envíe realmente
            document.getElementById('surveyForm').style.display = 'none'; // Oculta el formulario
            document.getElementById('thankYouMessage').style.display = 'block'; // Muestra el mensaje de agradecimiento
        }

        // Asociar el evento de envío del formulario
        document.getElementById('surveyForm').addEventListener('submit', showThankYouMessage);

        // Mostrar la primera pregunta
        document.getElementById('question1').style.display = 'block';
    </script>
<footer id="pie">
    <div id="derechos">
        <p>Donde cada taza cuenta una historia <br>  ITA. Primer año,2024
            La Paz - Bolivia </p>

            <a href="#"><img src="img/logo.png" width=70 height=70 border=0 - alt="A Medida">
            <p>Desarrollado por:Tatiana</p>

        
    </div>
    
   
</footer>
</body>
</html>
