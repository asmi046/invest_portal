<div class="section-with-submenu__submenu">
    @if (isset($title))
        <span class="submenu__caption">{{ $title }}</span>
    @else
        <span class="submenu__caption">Разделы</span>
    @endif

    <ul class="submenu">
        @foreach ($puncts as $item)
            <li>
                <a href="{{ $item->lnk }}">{{ $item->title }}</a>
            </li>
        @endforeach

    </ul>
</div>
