<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script defer src="js/functions.js"></script>

<section id="container-slider">
    <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
    <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
    
    <!-- Contenedor para el carrusel de imágenes -->
    <ul id="slider">
        <li style="background-image: url('img/img2Carrusel1.jpg'); z-index:0;">
            <div class="content_slider">
                <div>
                    <h2>Artículos promocionales en <strong>Acrílico</strong></h2>
                    <p>Explora nuestro catálogo de artículos</p><br>
                </div>
            </div>
        </li>
        <li style="background-image: url('img/img1Carrusel.jpg'); z-index:0;">
            <div class="content_slider">
                <div>
                    <h2>Porta menús, displays, letreros, organizadores y más...</h2>
                    <p>Revisa nuestro catálogo y cotiza ahora!</p><br>
                </div>
            </div>
        </li>
    </ul>

    <!-- Botones fuera del carrusel -->
    <div class="slider-buttons">
        <a href="catalogo.php" class="btnSlider" id="btnCatalogo">Catálogo</a>
        <a href="contact.php" id="btnContacto" class="btnSlider">Cotizar</a>
    </div>
</section>

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #container-slider {
            position: relative;
            display: block;
            width: 100%;
        }

        #slider {
        visibility: visible; /* Ocultar el carrusel hasta que se carguen las imágenes */
        position: relative;
        display: block;
        width: 100%;
        height: 70vh;
        min-height: 300px;
    }

        #slider li {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            width: 100%;
            height: 100%;
            display: block;
            -webkit-transition: opacity 1s;
            -moz-transition: opacity 1s;
            -ms-transition: opacity 1s;
            -o-transition: opacity 1s;
            transition: opacity 1s;
            z-index: -1;
            opacity: 0;
        }

    #slider li.active {
        opacity: 1;
    }

    #slider.visible {
        visibility: visible; /* Mostrar el carrusel cuando las imágenes se hayan cargado */
    }

        #container-slider .arrowPrev,
        #container-slider .arrowNext {
            font-size: 30pt;
            color: rgba(15, 139, 255, 0.65);
            cursor: pointer;
            position: absolute;
            top: 50%;
            left: 50px;
            z-index: 2;
        }

        #container-slider .arrowNext {
            left: initial;
            right: 50px !important;
        }

        /* Estilos generales */
        .content_slider {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Alinea el contenido en la parte superior */
            padding: 15px 30px;
            color: #FFF;
            width: 100%;
            height: 100%;
            position: relative;
            top: 15%; /* Ajusta este valor para mover el contenido hacia arriba */
        }

        .content_slider div {
            text-align: center;
            max-width: 80%; /* Ajusta el ancho máximo del contenido */
            width: 100%; /* Para que sea responsivo */
        }

        .content_slider h2 {
            font-family: 'arial';
            font-size: 35pt;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Sombra para mejorar la visibilidad */
            margin-bottom: 10px; /* Espacio entre el título y el párrafo */
            max-width: 100%; /* Ajusta el ancho dentro del div */
            margin: 0 auto; /* Centra el texto */
            overflow-wrap: break-word; /* Asegura que el texto largo se divida en varias líneas */
        }

        .content_slider p {
            font-size: 20pt;
            font-family: 'arial';
            color: white;
            margin-top: 40px;
            margin-bottom: 0.7em; /* Usa "em" para un margen relativo al tamaño de la fuente */
            border-radius: 5px; /* Bordes redondeados */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Sombra para el texto */
            background-color: #65AAF0;
            display: inline-block; /* Ajusta el fondo al tamaño del texto */
            padding: 10px 20px; /* Añade padding para que el texto no esté pegado al borde */
        }

        .btnSlider {
            color: #FFF;
            text-shadow: 1px 1px 1px black;
            font-size: 18pt;
            font-family: 'arial';
            letter-spacing: 1px;
            padding: 15px 30px; /* Ajusta el padding del botón */
            border: 1px solid #CCC;
            background: #65AAF0; /* Fondo más opaco */
            border-radius: 10px;
            text-decoration: none;
            transition: .5s all;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.9); /* Sombra para el texto del botón */
            margin-top: 20px; /* Margen superior para separar el botón del párrafo */
            display: block; /* Asegura que el botón esté en una nueva línea */
            width: fit-content; /* Ajusta el ancho al contenido */
            margin-left: auto; /* Centra el botón horizontalmente */
            margin-right: auto; /* Centra el botón horizontalmente */
        }

        /* Botones fuera del carrusel */
        .slider-buttons {
            position: absolute;
            bottom: 30%; /* Ajusta la distancia desde la parte inferior */
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10; /* Asegura que los botones estén por encima de las imágenes */
        }

        .slider-buttons a {
            margin: 0 15px;
        }
        /* Estilos responsivos */
    @media screen and (max-width: 460px) {
        .content_slider {
            top: 5%; /* Ajusta este valor para dispositivos móviles */
            padding: 10px 15px; /* Reduce el padding en móviles */
        }

        .content_slider h2 {
            font-size: 16pt !important; /* Tamaño más pequeño para móviles */
            line-height: 1.2; /* Ajusta el interlineado */
            margin-bottom: 5px; /* Reduce el margen inferior */
        }

        .content_slider p {
            font-size: 12pt !important; /* Tamaño más pequeño para móviles */
            padding: 8px 15px; /* Padding reducido */
            margin-bottom: 1em; /* Reduce el margen inferior */
        }

        .btnSlider {
            font-size: 14pt !important; /* Tamaño más pequeño para móviles */
            padding: 8px 15px; /* Padding reducido */
            margin-top: 10px; /* Reduce el margen superior */
            width: 100%; /* Hace que el botón ocupe el 100% del ancho */
            box-sizing: border-box; /* Asegura que el padding no afecte el ancho del botón */
            text-align: center; /* Centra el texto dentro del botón */
            display: block; /* Hace que los botones se apilen verticalmente */
            margin-left: auto;
            margin-right: auto; /* Centra los botones horizontalmente */
        }

        #slider {
            height: 50vh; /* Aumenta la altura para móviles */
            min-height: 250px; /* Altura mínima para móviles */
        }

        /* Ocultar las flechas de navegación en móviles */
        #container-slider .arrowPrev,
        #container-slider .arrowNext {
            display: none; /* Oculta las flechas */
        }
    }

    

</style>
