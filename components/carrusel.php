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
        height: 70vh; /* Ajusta la altura del carrusel */
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

    #container-slider .arrowPrev, #container-slider .arrowNext {
        font-size: 30pt;
        color: rgba(42, 152, 255, 0.65);
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

    .content_slider {
        padding: 15px 30px;
        color: #FFF;
        width: 100%;
        height: 100%;
    }

    .content_slider div {
        text-align: center;
    }

    .content_slider h2 {
        font-family: 'arial';
        font-size: 30pt;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .content_slider p {
        font-size: 15pt;
        font-family: 'arial';
        color: #FFF;
        margin-bottom: 20px;
    }

    #slider li .content_slider {
        background: rgba(255, 255, 255, 0.5);
        padding: 10px 125px;
    }

    .content_slider {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btnSlider {
        color: #FFF;
        font-size: 15pt;
        font-family: 'arial';
        letter-spacing: 1px;
        padding: 10px 50px;
        border: 1px solid #CCC;
        background: rgba(13, 13, 13, 0.55);
        border-radius: 31px;
        text-decoration: none;
        transition: .5s all;
    }

    .btnSlider:hover {
        background: #111;
        border: 1px solid #111;
    }

    .listslider {
        position: absolute;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        justify-content: space-between;
        align-items: center;
        left: 50%;
        bottom: 5%;
        list-style: none;
        z-index: 2;
        transform: translateX(-50%);
    }

    .listslider li {
        border-radius: 50%;
        width: 10px;
        height: 10px;
        cursor: pointer;
        margin: 0 5px;
    }

    .listslider li a {
        background: #CCC;
        border-radius: 50%;
        width: 100%;
        height: 100%;
        display: block;
    }

    .item-select-slid {
        background: #FFF  !important;
    }

    @media screen and (max-width: 460px) {
        .content_slider h2 {
            font-size: 15pt !important;
        }
        .content_slider p {
            font-size: 12pt !important;
        }
        #container-slider .arrowPrev, #container-slider .arrowNext {
            font-size: 20pt;
        }
        #container-slider .arrowPrev {
            left: 15px;
        }
        #container-slider .arrowNext {
            right: 15px !important;
        }
        #slider {
            height: 40vh; /* Ajusta la altura en dispositivos móviles */
            min-height: 200px; /* Altura mínima en dispositivos móviles */
        }
        #slider li .content_slider {
            padding: 10px 35px;
        }
        .btnSlider {
            padding: 10px 30px;
            font-size: 10pt;
        }
    }
</style>
<section id="container-slider">	
    <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
    <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
    <ul class="listslider">
      <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
      <li><a itlist="itList_1" href="#"></a></li>     
    </ul>
    <ul id="slider">
            <li style="background-image: url('img/img2Carrusel1.jpg'); z-index:0; opacity: 1;">
                <div class="content_slider">
                    <div>
                        <h2>Emprendimiento empresarial</h2>
                        <p>Descubra en qué consiste el emprendimiento empresarial por medio de 5 estrategias fundamentales.</p>
                        <a href="#" class="btnSlider">Ver más</a>
                    </div>
                </div>
            </li>
        <li style="background-image: url('img/img1Carrusel.jpg'); z-index:0; opacity: 0;">
            <div class="content_slider">
                <div>
                    <h2>Otra diapositiva</h2>
                    <p>Contenido de otra diapositiva.</p>
                    <a href="#" class="btnSlider">Ver más</a>
                </div>
            </div>
        </li>
   </ul>
 </section>