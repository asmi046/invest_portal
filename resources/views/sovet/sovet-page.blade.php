@extends('layouts.all')

@php
    extract(get_page_meta(
        "Совет связанный с инвестиционной деятельностью в Курской области",
        isset($page)? $page : null
    ));
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', $page_banner)
@section('page_title', $page_title)


@section('main')
    <div class="news-page-section">
        <div class="inner">
            <x-breadcrumbs.main :sovet="$page_title"></x-breadcrumbs.main>

            @if (isset($page))
                <x-page.content
                    :page="$page"
                ></x-page.content>
            @endif

            <h3>{{__('Нормативная правовая база о деятельности Совета')}}</h3>

            @if ($page->pologenie)
                <x-widget-file
                    :lnk="Storage::url($page['pologenie'])"
                    :title="_tr($page['pologenie_title'], isset($page['pologenie_title_en'])?$page['pologenie_title_en']:null)"
                ></x-widget-file>
            @endif

            <h3>{{__('Состав Совета')}}</h3>

            <div class="columns-box columns-box--two-col">
                @foreach ($page->sostav as $item)
                    <x-widget-file
                        :lnk="Storage::url($item['lnk'])"
                        :title="_tr($item['title'], isset($item['title_en'])?$item['title_en']:null)"
                    ></x-widget-file>
                @endforeach
            </div>

            <h3>{{__('Планы работы Совета')}}</h3>

            <div class="columns-box columns-box--two-col">
                @foreach ($page->work_planes as $item)
                    <x-widget-file
                        :lnk="Storage::url($item['lnk'])"
                        :title="_tr($item['title'], isset($item['title_en'])?$item['title_en']:null)"
                    ></x-widget-file>
                @endforeach
            </div>

            <h3>{{__('Протоколы заседания Совета')}}</h3>

            @foreach ($protocols as $key => $item)

                <details>
                    <summary>
                        {{$key}} {{__('год')}}
                        <span class="summary__cross"></span>
                    </summary>
                    <div class="details__body">
                        @foreach ($item as $subitem)

                            <x-widget-file
                                :lnk="Storage::url($subitem['lnk'])"
                                :title="_tr($subitem['title'], isset($subitem['title_en'])?$subitem['title_en']:null)"
                            ></x-widget-file>
                        @endforeach
                    </div>
                </details>

            @endforeach

            <h3>{{__('Видео заседаний Совета')}}</h3>
            @foreach ($video as $key => $item)

                <details>
                    <summary>
                        {{$key}} {{__('год')}}
                        <span class="summary__cross"></span>
                    </summary>
                    <div class="details__body">
                        @foreach ($item as $subitem)
                            <x-widget-file
                                :lnk="Storage::url($subitem['lnk'])"
                                :title="_tr($subitem['title'], isset($subitem['title_en'])?$subitem['title_en']:null)"
                            ></x-widget-file>
                        @endforeach
                    </div>
                </details>

            @endforeach
        </div>
    </div>
@endsection
