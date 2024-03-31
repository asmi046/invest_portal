@extends('layouts.all')

@php
    $title = "Aналитика по курской области";
    $description = "Инвестиционная аналитика по курской области, аналитические материалы для инвесторов"
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', 'img/top_img/analitics.webp')
@section('page_title', $title)


@section('main')
    <div class="section-with-submenu">
        <div class="inner">
            <div class="section-with-submenu__content">
                @if ($info)
                    <x-breadcrumbs.main :title="_tr($info->title, isset($info->title_en)?$info->title_en:null)"></x-breadcrumbs.main>

                    <x-page.content
                        :page="$info"
                    ></x-page.content>
                @endif

                <x-region-parametrs.region-parametr-section></x-region-parametrs.region-parametr-section>
            </div>
            <x-page.submenu :title="__('Подробнее').':'" :puncts="$puncts"></x-page.submenu>
        </div>
    </div>
@endsection
