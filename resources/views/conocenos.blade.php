@component('components.layout')
    @slot('title')
        CONOCENOS
    @endslot
@endcomponent
@php
$items = [['route' => '/', 'text' => 'INICIO'],
          ['route' => '/reservar', 'text' => 'RESERVAR'],
         
          ['route' => '/menu', 'text' => 'MENU']];

@endphp
<x-barranavegacion :items="$items"></x-barranavegacion>
<div class="tituloprin">
    <p>
      Restaurant
      <span>
        CINTEOTL
      </span>
      &mdash; La mejor eleccion para tus reuniones familiares &mdash;
    </p>
    </div>
     <div class="Conocenos">
            <div class="fotos">
            <img class="foto2" src="../images/lugar2.jpg">
            <img class="foto3" src="images/logosinfondo.png">
            </div>
            <div class="video">
            <iframe width="1225" height="400" src="https://www.youtube.com/embed/8vciweCZ8Jo?start=9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        <div class=seccion0>
        <div class="seccion1">
            <h2>Quienes somos</h2>
            <p>Somos un grupo restaurantero fundado el 17 de Octubre de 2001 llamado CINTEOTL y nuestra misión es ofrecer calidad con un sabor delicioso para el paladar, en un ambiente agradable, comprometidos con proporcionar un excelente servicio y brindar satisfacción a los clientes, para así alcanzar su fidelidad y ser competente en el mercado.</p>
        </div>
        <img class="foto4" src="images/lugar3.jpg">
        </div>
    
        <div class=seccion2>
        <div class="seccion3">
            <img class="foto5" src="../images/lugar2.jpg"> 
    </div>
        <h3>Nuestra Comida</h3>
        <p>Llevamos la mejor combinación de productos orgánicos y productos agrícolas hechos a mano de la temporada cómodamente a su puerta al cultivar y asociarnos con granjas y artesanos locales en su área.</p>
        </div>
    
    
        <div class="slide">
                <div class="slide-inner">
                    <input class="slide-open" type="radio" id="slide-1" 
                          name="slide" aria-hidden="true" hidden="" checked="checked">
                    <div class="slide-item">
                        <img class="tamaño" src="../images/lugar1.jpg">
                    </div>
                    <input class="slide-open" type="radio" id="slide-2" 
                          name="slide" aria-hidden="true" hidden="">
                    <div class="slide-item">
                        <img class="tamaño" src="images/comida3.png">
                    </div>
                    <input class="slide-open" type="radio" id="slide-3" 
                          name="slide" aria-hidden="true" hidden="">
                    <div class="slide-item">
                        <img class="tamaño" src="images/comida1.png">
                    </div>
                    <label for="slide-3" class="slide-control prev control-1"></label>
                    <label for="slide-2" class="slide-control next control-1"></label>
                    <label for="slide-1" class="slide-control prev control-2"></label>
                    <label for="slide-3" class="slide-control next control-2"></label>
                    <label for="slide-2" class="slide-control prev control-3"></label>
                    <label for="slide-1" class="slide-control next control-3"></label>
                    <ol class="slide-indicador">
                        <li>
                            <label for="slide-1" class="slide-circulo">•</label>
                        </li>
                        <li>
                            <label for="slide-2" class="slide-circulo">•</label>
                        </li>
                        <li>
                            <label for="slide-3" class="slide-circulo">•</label>
                        </li>
                    </ol>
                </div>
            </div>
    
            <div class="parrafos">
                <p>Contamos con una gran variedad de platillos que te ofrecerán una experiencia culinaria de altura.</p>
                <p>Nuestro personal te ofrecerá una estadía confortable</p>
                <p>Puedes preguntar sobre la gran variedad de bebidas con las que contamos.</p>
    
            </div>
    </div>