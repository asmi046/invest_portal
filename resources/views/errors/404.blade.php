@extends('layouts.all')

@php
    extract(get_page_meta(
        "404 - К сожалению страница не найденва ",
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

            <h1>404</h1>
            <p>Страница не найдена</p>
        </div>
    </div>
@endsection

