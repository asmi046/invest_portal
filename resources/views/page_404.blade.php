@extends('layouts.all')

@php
    extract(get_page_meta(
        "Страница не найдена",
        isset($page)? $page : null
    ));
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', $page_banner)
@section('page_title', $page_title)



@section('main')
    <section class="not-found-page">
        <div class="inner">
            <h2 class="not-found-page__title">404</h2>
            <p class="not-found-page__description">Страница не найдена</p>
        </div>
    </section>
@endsection
