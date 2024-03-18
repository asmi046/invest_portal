@extends('layouts.all')

@php
    extract(get_page_meta(
        "Презентация инвестиционного проекта в Курской области",
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
