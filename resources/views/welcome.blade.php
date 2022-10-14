@component('components.layout')
    @slot('title')
        HOME
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
 <img width="100%" height="610vh" src="https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg?cs=srgb&dl=pexels-pixabay-260922.jpg&fm=jpg" alt="">
