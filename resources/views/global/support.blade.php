@extends('layouts.all')

@php
    $title = "Меры поддержки инвестора";
    $description = "Меры поддержки инвестора при созданни инвестиционных проектов в Курской области"
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', '')
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

            </div>
            <x-page.submenu :title="__('Подробнее').':'" :puncts="$puncts"></x-page.submenu>

        </div>
    </div>
@endsection
