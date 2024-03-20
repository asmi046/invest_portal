@isset($all_menu['Меню контактов'])
    @foreach ($all_menu['Меню контактов'] as $item)
        <li><a href="{{ $item['item']['lnk'] }}">{{ _tr($item['item']['title'], $item['item']['title_en']) }}</a></li>
    @endforeach
@endisset

