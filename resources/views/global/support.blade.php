@extends('layouts.all')

@php
    $title = "Меры поддержки инвестора";
    $description = "Меры поддержки инвестора при созданни инвестиционных проектов в Курской области"
@endphp

@section('title', $title)
@section('description', $description)

<x-header-inner :title="$title"></x-header-inner>

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
