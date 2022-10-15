@component('components.layout')
    @slot('title')
        HOME
    @endslot
@endcomponent

<header class="welcomeheader">
    @php
        $items = [['route' => '/', 'text' => 'INICIO'], ['route' => '/pedidos', 'text' => 'PEDIDOS'], ['route' => '/reservar', 'text' => 'RESERVAR'], ['route' => '/menu', 'text' => 'MENU']];
        
    @endphp
    <x-barranavegacion :items="$items"></x-barranavegacion>
    {{-- <img class="welcomeheader_fondo"
        src="https://images.pexels.com/photos/687824/pexels-photo-687824.jpeg?cs=srgb&dl=pexels-edward-eyer-687824.jpg&fm=jpg"
        alt=""> --}}
    <h1 class="welcomeheader_title">CINTEOTL</h1>

    <?php
   /* $botontop = '250px'; 
   $botonleft= '100px'; */
    ?>
    
    @component('components.boton')
        @slot('contenidoboton')
            Jesus
        @endslot
    @endcomponent
    <img class="welcomeheader_logo" src="images/logo.png" alt="">
    <P class="welcomeheader_descripcion">Cinteotl es un restaurante que ofrece una gran<br />
        variedad de platillos con una calidad unica,<br />
        ademas de contar con un lugar agradable...</P>
        
</header>
<main>
    <img class="welcomeheader_fondo"
        src="https://images.pexels.com/photos/687824/pexels-photo-687824.jpeg?cs=srgb&dl=pexels-edward-eyer-687824.jpg&fm=jpg"
        alt="">
    <h1 class="welcomeheader-title">Creando experiencias unicas <br />
        para tu paladar</h1>
</main>
