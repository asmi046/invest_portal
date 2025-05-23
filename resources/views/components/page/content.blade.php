
@if ($page)
    @php
        $img = _tr($page->img, $page->img_en);
    @endphp


    @if($img)
        <a href="{{ Storage::url($img) }}" class="lg-gallery page-photo">
            <img src="{{Storage::url($img)}}" alt="{{_tr($page->title, $page->title_en)}}">
        </a>
    @endif

    {!! _tr($page->description, $page->description_en) !!}

    @if($page->files)
        @foreach ($page->files as $item)
            <x-widget-file
            :lnk="Storage::url($item['file'])"
            :title="_tr($item['title'], isset($item['title_en'])?$item['title_en']:null)"
            ></x-widget-file>
        @endforeach
    @endif

@endif


