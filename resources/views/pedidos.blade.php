@component('components.layout')
    @slot('title')
        PEDIDOS
    @endslot
@endcomponent
<header>
    @php
        $items = [['route' => '/', 'text' => 'HOME'],
                 ['route' => '/pedidos', 'text' => 'PEDIDOS'],
                 ['route' => '/reservar', 'text' => 'RESERVAR'],
                 ['route' => '/menu', 'text' => 'MENU']];
                 
    @endphp
    <x-barranavegacion :items="$items"></x-barranavegacion>
</header>
@component('components.slider')
    
@endcomponent