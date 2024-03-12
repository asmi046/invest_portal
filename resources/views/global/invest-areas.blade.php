@extends('layouts.all')

@php
    $title = "Инвестиционные площадки Курской области";
    $description = "Инвестиционные площадки Курской области для реализации инвестиционных проектов"
@endphp

@section('title', $title)
@section('description', $description)

<x-header-inner banner="areas.webp" :title="$title"></x-header-inner>

@section('main')
    <div class="section-with-submenu">
        <div class="inner">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>

            <div class="section-with-submenu__content">

            </div>
            <x-page.submenu title="Подробнее:" :puncts="$puncts"></x-page.submenu>
        </div>
    </div>
@endsection
