<div class="section-with-submenu__submenu">
    @if (isset($title))
        <span class="submenu__caption">{{ $title }}</span>
    @else
        <span class="submenu__caption">{{__('Разделы')}}</span>
    @endif

    <ul class="submenu">
        @foreach ($puncts as $item)
            <li>
                @if ($item->lnk)
                    <a href="{{ $item->lnk }}">{{ $item->title }}</a>
                @else
                    <a href="{{ route('page', $item->slug) }}">{{ $item->title }}</a>
                @endif

            </li>
        @endforeach

    </ul>
</div>
