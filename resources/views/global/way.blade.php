@extends('layouts.all')

@php
    $title = "Путь инвестора";
    $description = "Путь инвестора который необходимо пройти для создания инвестиционного проекта"
@endphp

@section('title', $title)
@section('description', $description)

<x-header-inner banner="way.webp" :title="$title"></x-header-inner>

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
