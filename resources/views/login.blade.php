<?php
session_start();
if(isset($_SESSION['usuario'])){  
header("location: bienvenida.php");
}
?>

@component('components.layout')
    @slot('title')
        LOGIN
    @endslot
@endcomponent
@php
        $items = [['route' => '/', 'text' => 'HOME'],
                 ['route' => '/reservar', 'text' => 'RESERVAR'],
                 ['route' => '/menu', 'text' => 'MENU']];
    @endphp
    <x-barranavegacion :items="$items"></x-barranavegacion>
    
        <div class="cajalogin">
            <main>
                <div class="contenedor__todo">
                    <div class="caja__trasera">
                        <div class="caja__trasera-login">
                            <h3>¿Ya esta registrado en este sistema?</h3>
                            <p><b><i>Inicia sesión para entrar en la página</i></b></p>
                            <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                        
                        </div>
                        <div class="caja__trasera-register">
                            <h3>¿Aún no está registrado en este sistema?</h3>
                            <p><b><i>De clic en registrarse y rellene el formulario</i></b></p>
                            <button id="btn__registrarse">Regístrarse</button>
                        </div>
                    </div>
            
                    <!-- Formulario de Login -->
                    <div class="contenedor__login-register">
                        <!--Login-->
                        <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                            <h2>Iniciar Sesión</h2>
                            <input type="text" placeholder="Usuario" name="nombre_usuario">
                            <input type="password" placeholder="Contraseña" name="contrasena_usuario">
                            <button>Entrar</button>
                        </form>
            
                        <!--Register-->
                        <form action="php/resgistro_usuario_be.php" method="POST" class="formulario__register">
                            <h2>Regístrarse</h2>
                            <input type="text" placeholder="Nombre de Usuario" name="nombre_usuario">
                            <input type="text" placeholder="Tipo de Usuario" name="tipo_usuario">
                            <input type="password" placeholder="Contraseña" name="contrasena_usuario">
                            <button>Regístrarse</button>
                        </form>
                    </div>
                </div>
            </main>
            <script src="../js/main.js"></script>
        </div>
