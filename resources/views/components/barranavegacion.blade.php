<nav class="CajaPrincipal">
    <ul>
        <img class="logo" width="35" src="/images/logo.png" alt="">
    </ul>
    <ul>
        <p class="nombre">CINTÉOTL</p>
    </ul>
    <ul>
        @foreach ($items as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ $item['route'] }}">{{ $item['text'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
