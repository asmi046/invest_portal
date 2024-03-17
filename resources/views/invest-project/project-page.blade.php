@extends('layouts.all')

@php
    $main_title = "Презентация инвестиционного проекта в Курской области";
    if (isset($page)) {
        $title = (empty($page->seo_title))?$page->title:$page->seo_title;
        $description = (empty($page->seo_description))?$page->title:$page->seo_description;
    } else {
        $title = $main_title;
        $description = $main_title;
    }

@endphp

@section('title', $title)
@section('description', $description)


@section('main')
    <x-header-inner :banner="asset('img/top_img/industry.webp')" :title="_tr($page->title, $page->title_en)"></x-header-inner>
    <div class="news-page-section">
        <div class="inner">
            <x-breadcrumbs.main :invest="_tr($page->title, $page->title_en)"></x-breadcrumbs.main>

            {!! _tr($page->description, $page->description_en) !!}

            @if ($page->files)
                <h2>{{__('Презентация проекта')}}</h2>
                @foreach ($page->files as $item)
                    <x-widget-file
                        :lnk="Storage::url('invest-project/'.$item['file'])"
                        :title="_tr($item['title'], isset($item['title_en'])?$item['title_en']:null)"
                    ></x-widget-file>
                @endforeach
            @endif

        </div>
    </div>
@endsection
