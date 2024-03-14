@extends('layouts.all')

@php
    $title = "Инвестиционные площадки Курской области";
    $description = "Инвестиционные площадки Курской области для реализации инвестиционных проектов"
@endphp

@section('title', $title)
@section('description', $description)

<x-header-inner banner="img/top_img/areas.webp" :title="$title"></x-header-inner>

@section('main')
    <div class="section-with-submenu">
        <div class="inner">
            <div class="section-with-submenu__content">
                <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
                @isset($info)
                    {!! $info->description !!}
                @endisset
            </div>
            <x-page.submenu title="Подробнее:" :puncts="$puncts"></x-page.submenu>
        </div>
    </div>
@endsection
