@extends('layouts.all')

@php
    extract(get_page_meta(
        "Реестр земельных участков",
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


            @foreach ($areas as $item)
                <x-cadastr.card :item="$item"></x-cadastr.card>
            @endforeach

            <x-pagination :tovars="$areas"></x-pagination>
        </div>
    </div>
@endsection

