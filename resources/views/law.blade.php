@extends('layouts.all')

@php
    extract(get_page_meta(
        "Инвестиционное законодательство Курской области",
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

            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>

            <x-page.content
                    :page="$page"
            ></x-page.content>


            @foreach ($docs as $key => $value)
                <h4>{{ $key }}</h4>
                <div class="columns-box columns-box--two-col">
                    @foreach ($value as $item)
                        <x-widget-file
                        :lnk="Storage::url($item->file)"
                        :title="$item->title"
                        ></x-widget-file>
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>
@endsection

