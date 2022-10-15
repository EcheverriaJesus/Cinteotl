<nav class="Cajamenu">
    <ul>
        <img class="Cajamenu_logo" width="35" src="/images/logo.png" alt="">
    </ul>
    <ul>
        <p class="Cajamenu_nombre">CINTÉOTL</p>
    </ul>
    <ul>
        @foreach ($items as $item)
            <li class="Cajamenu_nav-item">
                <a class="Cajamenu_nav-link" href="{{ $item['route'] }}">{{ $item['text'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
