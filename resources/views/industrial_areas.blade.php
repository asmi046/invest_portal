@extends('layouts.all')

@php
    extract(get_page_meta(
        "Индустриальные парки Курской области",
        isset($page)? $page : null
    ));
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', $page_banner)
@section('page_title', $page_title)

@section('main')
    <div class="section-with-submenu">
        <div class="inner">
            <div class="section-with-submenu__content">
                <x-breadcrumbs.main :title="_tr($page->title, isset($page->title_en)?$page->title_en:null)" ></x-breadcrumbs.main>


                <x-page.content
                    :page="$page"
                ></x-page.content>

                <div class="industrial-areas">
                    @foreach ($all_areas as $item)
                        <x-industrial-areas.card :item="$item"></x-industrial-areas.card>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
@endsection

