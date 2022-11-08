@component('components.layout')
    @slot('title')
        RESERVAR
    @endslot
@endcomponent
    @php
        $items = [['route' => '/', 'text' => 'HOME'],
                 ['route' => '/pedidos', 'text' => 'PEDIDOS'],
                 ['route' => '/reservar', 'text' => 'RESERVAR'],
                 ['route' => '/menu', 'text' => 'MENU']];
                 
    @endphp
    <x-barranavegacion :items="$items"></x-barranavegacion>
    <div class="VistaReservar">
        <div class="VistaReservar__Prin">
            <h1>HAZ TU RESERVACIÓN AQUI</h1>
            <p>En esta seccion podras hacer tu reservacion totalmente en linea y posteriormente te llegara un correro electronico de confirmacion de tu reservacion.</p>
            <button class="VistaReservar__Boton">Regresar</button>
        </div>
    <div class="Vista-Reservar__formulario">
        <h2>CINTEOTL</h2>
        <form class="checkoutformulario1" action="" method="POST">
    
        <div class="group-form-name">
            <label class="labelname" for="name"> Nombre:</label>
            <input class="name" require type="text" name="name" id="name" >
        </div>
        
        <div class="group-form-date">
            <label class="date-form__label1" for="date">Fecha:</label>
            <input class="date" require type="date" name="date" id="date">
        </div>
         
        <div class="group-form-hour">
            <label class="labelhour" for="hour">Hora:</label>
            <div class="alertahora">
            <input class="hour" require type="time" name="hour" id="hour" placeholder="Hora de apartura a las 1:00 P.M / Hora de cierre 9:00 P.M">
            <label class="labelhour2" for="hour2">Abierto de 1:00 PM a 9:00 P.M</label>
            </div>
        </div>
    
        <div class="group-form-person">
            <label class="labelperson" for="person">Numero de perosnas: </label>
            <select name="table" class="person">
                <option value="1">1-2 personas</option>
                <option value="2">3-6 personas</option>
                <option value="3">7-10 perosnas</option>
                <option value="4">Mas de 10 personas</option>
            </select>
        </div>
    
        <div class="group-form-email1">
            <label class="labelemail1" for="email1"> E-mail:</label>
            <input class="email1"  require type="email" name="email1" id="email1">
        </div>
        
        <div>
            <button class="botonreservar">Reservar</button>
        </div> 
    
        </form>
        </div>
    </div>