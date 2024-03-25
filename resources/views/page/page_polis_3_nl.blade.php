@extends('layouts.all')

@php
    extract(get_page_meta(
        "Налоговые льготы для резидентов особой экономической зоны",
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
            <x-breadcrumbs.main :page="_tr($page->title, isset($page->title_en)?$page->title_en:null)" :parent="$parent"></x-breadcrumbs.main>

            <x-page.content
                :page="$page"
            ></x-page.content>

            <x-nalog-lgot></x-nalog-lgot>
        </div>
    </div>
@endsection

