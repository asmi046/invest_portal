@extends('layouts.all')

@php
    $title = "Информация для экспертов АСИ";
    $description = "Информация для экспертов АСИ"
@endphp

@section('title', $title)
@section('description', $description)

<x-header-inner banner="img/top_img/asi.webp" :title="$title"></x-header-inner>

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
