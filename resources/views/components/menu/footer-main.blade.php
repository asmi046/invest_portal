<ul class="footer-list">
    @foreach ($all_menu['Меню в шапке'] as $item)
    <li>
        <a href="{{ $item['item']['lnk'] }}">{{ _tr($item['item']['title'], $item['item']['title_en']) }}</a>
    </li>
    @endforeach
</ul>
