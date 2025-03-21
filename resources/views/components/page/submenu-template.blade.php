<div class="section-with-submenu__submenu">
    @if (isset($title))
        <span class="submenu__caption">{{ $title }}</span>
    @else
        <span class="submenu__caption">{{__('Разделы')}}</span>
    @endif

    <ul class="submenu">
        @foreach ($puncts as $item)
            <li>
                <a href="{{ $item['item']->lnk }}">{{ _tr($item['item']->title, $item['item']->title_en) }}</a>
            </li>
        @endforeach

    </ul>
</div>
