{{-- <div class="cajacard">
    <img class="cajacard_imagen" src="{{ $imagencard }}" alt="">
    <h4 class="cajacard_titulo">{{ $titulocard }}</h4>
    <p class="cajacard_descripcion">{{ $descripcioncard }}</p>
    <div class="cajacard_cajabotondos">
        <a  class="cajacard_cajaboton"href="{{ $direccioncard }}">{{ $botoncard }}</a>
    </div>
</div> --}}

@foreach ($items as $item)
    <div class="cajacard">
        <img class="cajacard_imagen" src="{{ $item['imagencard'] }}" alt="">
        <h4 class="cajacard_titulo">{{ $item['titulocard'] }}</h4>
        <p class="cajacard_descripcion">{{ $item['descripcioncard'] }}</p>
        <div class="cajacard_cajabotondos">
            <a class="cajacard_cajaboton"href="{{ $item['botoncard'] }}">{{ $item['direccioncard'] }}</a>
        </div>
    </div>
@endforeach
