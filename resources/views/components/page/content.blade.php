

@if($page->img)
    <a href="{{ $page->img }}" class="lg-gallery page-photo">
        <img src="{{$page->img}}" alt="">
    </a>
@endif

@if($page->files)
    @foreach ($page->files as $item)
        <x-widget-file
        :lnk="Storage::url('page_files/'.$item['file'])"
        :title="$item['title']"
        ></x-widget-file>
    @endforeach
@endif

{!! $page->description !!}
