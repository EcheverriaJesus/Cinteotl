@component('components.layout')
    @slot('title')
        MENU
    @endslot
@endcomponent
<header class="menuheader">
    @php
        $items = [['route' => '/', 'text' => 'HOME'], 
        ['route' => '/reservar', 'text' => 'RESERVAR'], 
        ['route' => '/menu', 'text' => 'MENU']];
        
    @endphp
    <x-barranavegacion :items="$items"></x-barranavegacion>


    <img class="menuheader_fondo"
        src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        alt="">
    @component('components.slider')
    @endcomponent
</header>

<section class="menumain">
    <div>
        <img class="menumain_fondo"
            src="https://images.pexels.com/photos/332090/pexels-photo-332090.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            alt="">
    </div>
    <div class="menumain_cajamenu">
        <h3 class="menumain_cajamenu_menu">MENU</h3>
    </div>
    <div class="menumain_encerrarcards">
        @php
        $items = [
        ['imagencard' => '../images/saludable.jpg', 'titulocard' => 'FIT', 'descripcioncard' => 'Los mas deliciosos  Platillos para cuidar your body', 'botoncard' => '/', 'direccioncard' => 'Ver Platillos'],
        ['imagencard' => '../images/postres.jpg', 'titulocard' => 'POSTRES', 'descripcioncard' => 'Los mejores postres los preparan los chefs de CINTEOLT', 'botoncard' => '/', 'direccioncard' => 'Ver Postres'],
        ['imagencard' => '../images/bebidas.jpg', 'titulocard' => 'BEBIDAS', 'descripcioncard' => 'Refresca el paladar con una agua fresca, jugos naturales, ', 'botoncard' => '/', 'direccioncard' => 'Ver Bebidas'],
        ['imagencard' => '../images/hamburger.jpg', 'titulocard' => 'FAST FOOD', 'descripcioncard' => '¿TIENES PRISA? Pero quieres comida de calidad, CINTEOLT fue fundado para ese proposito', 'botoncard' => '/', 'direccioncard' => 'Ver Platillos']];
    @endphp
    <x-card :items="$items"></x-card>
    </div>

</section>

@component('components.footer')
@endcomponent
