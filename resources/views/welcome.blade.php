@component('components.layout')
    @slot('title')
        HOME
    @endslot
@endcomponent

<header class="welcomeheader">
    @php
        $items = [['route' => '/', 'text' => 'INICIO'],
                  ['route' => '/reservar', 'text' => 'RESERVAR'],
                 
                  ['route' => '/menu', 'text' => 'MENU']];
        
    @endphp
    <x-barranavegacion :items="$items"></x-barranavegacion>
    <div class="custom-shape-divider-top-1666881341">
        <div class="custom-shape-divider-bottom-1666881390">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    <h1 class="welcomeheader_title">CINTEOTL</h1>

    <?php
   /* $botontop = '250px'; 
   $botonleft= '100px'; */
    ?>
    
    @component('components.boton')
        @slot('contenidoboton')
            CONOCENOS
        @endslot
    @endcomponent
    <img class="welcomeheader_logo" src="../images/ensalada.png" alt="">
    <img class="welcomeheader_logodos " src="https://media.istockphoto.com/photos/fried-chicken-breasts-and-vegetables-picture-id162247170?k=20&m=162247170&s=612x612&w=0&h=-mNI6FeRn2iXIpBxOuVpEAWvGCH0ts5HSfZWbdoTyyE= " alt="">
    <img class="welcomeheader_logotres" src="https://media.istockphoto.com/photos/salad-with-fresh-vegetables-picture-id1202084119?k=20&m=1202084119&s=612x612&w=0&h=BmlAa0cqR_RLc6-CwDjNJuYmAt8I8qULy8tBbFdRfgw=" alt="">
    <img class="welcomeheader_logocuatro" src="https://media.istockphoto.com/photos/white-plate-with-cheeseburger-french-fries-and-sauce-picture-id119994915?k=20&m=119994915&s=612x612&w=0&h=snHCFrfGlLmoTX9FPT0tJDNvmU0gFsvOgFUHGXfQIS0= "alt="">
    <img class="welcomeheader_logoquinto" src="https://media.istockphoto.com/photos/tortilla-wraps-picture-id495186032?k=20&m=495186032&s=612x612&w=0&h=IR_1Hh8s76MxXyBj_vbv_DKCj8TtF1dbt9upmSpcbjc= "alt="">
    <P class="welcomeheader_descripcion">Cinteotl es un restaurante que ofrece una gran<br />
        variedad de platillos con una calidad unica,<br />
        ademas de contar con un lugar agradable...</P>
</header>
<section  class="welcomemain">
    
        <img class="welcomemain_imageh" src="../images/hamburguesa.jpg">
    
    <div class="welcomemain_subtitle">
        <h1>Creando experiencias unicas <br />
            para tu paladar</h1>    
    </div>
    @component('components.slider')
    
    @endcomponent 
</section>
@component('components.footer')
    
@endcomponent
