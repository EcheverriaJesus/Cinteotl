<nav class="Cajamenu">
    <div>
        <img class="Cajamenu_logo" width="35" src="/images/logo.png" alt="">
        <p class="Cajamenu_nombre">CINTÉOTL
        </p>
    </div>
    <ul>
        @foreach ($items as $item)
            <li class="Cajamenu_nav-item">
                <a class="Cajamenu_nav-link" href="{{ $item['route'] }}">{{ $item['text'] }}</a>
            </li>
        @endforeach
    </ul>
       <a href="/login">
         <button class="Cajamenu_cajabotonis">INICIAR SESION</button>
       </a>
</nav>
