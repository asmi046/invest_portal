<nav class="main-menu-container">
    <button class="close-menu-btn close-cross"></button>
    <ul class="main-menu">
        @foreach ($all_menu['Меню в шапке'] as $item)
            <li class="main-menu__parent-item">
                <a href="{{ $item['item']['lnk'] }}">{{ _tr($item['item']['title'], $item['item']['title_en']) }}</a>
            </li>
        @endforeach

    </ul>
</nav>
