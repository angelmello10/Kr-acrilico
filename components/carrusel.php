<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script defer src="js/functions.js"></script>

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
    position: relative;
    display: block;
    width: 100%;
    height: 70vh; /* Altura del carrusel */
    min-height: 300px; /* Altura mínima */
}

#slider li {
    background-repeat: no-repeat;
    background-size: cover; /* Asegura que la imagen cubra el área sin deformarse */
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
    opacity: 0; /* Todos los elementos están ocultos por defecto */
}

#slider li.active {
    opacity: 1; /* Solo el elemento activo es visible */
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
    margin-top: 20px;
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
        font-size: 12pt !important; /* Tamaño más pequeño para móviles */
        padding: 10px 20px; /* Padding reducido */
        margin-top: 10px; /* Reduce el margen superior */
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
<section id="container-slider">	
    <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
    <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
    <ul class="listslider">
      <a itlist="itList_0" href="#" class="item-select-slid"></a> 
    <ul id="slider">
            <li style="background-image: url('img/img2Carrusel1.jpg'); z-index:0; opacity: 1;">
                <div class="content_slider">
                    <div>
                        <h2>Artículos promocionales en <strong>Acrílico</strong> </h2>
                        <p>Explora nuestro catálogo de artículos</p><br>
                        <a href="catalogo.php" class="btnSlider">Ver Catálogo</a>
                    </div>
                </div>
            </li>
        <li style="background-image: url('img/img1Carrusel.jpg'); z-index:0; opacity: 0;">
            <div class="content_slider">
                <div>
                    <h2>Porta menús, displays, letreros, organizadores y más...</h2>
                    <p>Revisa nuestro catálogo y cotiza ahora!</p><br>
                    <a href="contact.php" class="btnSlider">Cotizar</a>
                </div>
            </div>
        </li>
   </ul>
 </section>