@extends('layouts.all')

@php
    $title = "Aналитика по курской области";
    $description = "Инвестиционная аналитика по курской области, аналитические материалы для инвесторов"
@endphp

@section('title', $title)
@section('description', $description)

<x-header-inner banner="analitics.webp" :title="$title"></x-header-inner>

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
