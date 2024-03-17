
@php
    $img = _tr($page->img, $page->img_en);
@endphp


@if($img)
    <a href="{{ $img }}" class="lg-gallery page-photo">
        <img src="{{$img}}" alt="{{_tr($page->title, $page->title_en)}}">
    </a>
@endif

{!! _tr($page->description, $page->description_en) !!}

@if($page->files)
    @foreach ($page->files as $item)
        <x-widget-file
        :lnk="Storage::url('page_files/'.$item['file'])"
        :title="_tr($item['title'], isset($item['title_en'])?$item['title_en']:null)"
        ></x-widget-file>
    @endforeach
@endif


