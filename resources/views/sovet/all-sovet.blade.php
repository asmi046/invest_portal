@extends('layouts.all')

@php
    extract(get_page_meta(
        "Все советы связанные с инвестиционной деятельностью в Курской области",
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

            <x-breadcrumbs.main :title="$page_title"></x-breadcrumbs.main>

            @if (isset($page))
                <x-page.content
                    :page="$page"
                ></x-page.content>
            @endif


            @foreach ($all_sovet as $item)
                <a href="{{ route('sovet_page', $item->slug) }}">{{
                    _tr($item->title, isset($item->title_en)?$item->title_en:null)
                }}</a>
            @endforeach
        </div>
    </div>
@endsection
