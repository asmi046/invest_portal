@extends('layouts.all')

@php
    $title = "Путь инвестора";
    $description = "Путь инвестора который необходимо пройти для создания инвестиционного проекта"
@endphp

@section('title', $title)
@section('description', $description)



@section('main')
    <x-header-inner banner="img/top_img/way.webp" :title="$title"></x-header-inner>

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
