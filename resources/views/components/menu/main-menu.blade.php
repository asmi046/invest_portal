<nav class="main-menu-container">
    <button class="close-menu-btn close-cross"></button>
    <ul class="main-menu">
        @foreach ($all_menu['Меню в шапке'] as $item)
            <li class="main-menu__parent-item">
                <a href="{{ $item['item']['lnk'] }}">{{ __($item['item']['title']) }}</a>
            </li>
        @endforeach

    </ul>
</nav>