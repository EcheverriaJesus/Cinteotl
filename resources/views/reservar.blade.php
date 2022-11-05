@component('components.layout')
    @slot('title')
        RESERVAR
    @endslot
@endcomponent
<header class="reservarheader">
    @php
        $items = [['route' => '/', 'text' => 'HOME'],
                 ['route' => '/reservar', 'text' => 'RESERVAR'],
                 ['route' => '/menu', 'text' => 'MENU']];
                 
    @endphp
    <x-barranavegacion :items="$items"></x-barranavegacion>


        <img class="reservarheader_fondo" src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
         
    @component('components.slider')
    
    @endcomponent 
</header>

<section class="reservarmain">
<div>
    <img class="reservarmain_fondo" src="https://images.pexels.com/photos/332090/pexels-photo-332090.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
</div>
<div class="reservarmain_cajamenu">
    <h3 class="reservarmain_cajamenu_menu">MENU</h3>
</div>
</section>
@component('components.footer')
    
@endcomponent