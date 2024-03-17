@extends('layouts.all')

@php
    $main_title = "Витрина инвестиционных проектов Курской области";

    if (isset($page)) {
        $title = (empty($page->seo_title))?$page->title:$page->seo_title;
        $description = (empty($page->seo_description))?$page->title:$page->seo_description;
    } else {
        $title = $main_title;
        $description = $main_title;
    }

@endphp

@section('title', $title)
@section('description', $description)



@section('main')
    <x-header-inner :banner="$page->banner" :title="$page->title"></x-header-inner>
    <div class="news-page-section">
        <div class="inner">

            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>

            <x-page.content
                    :page="$page"
            ></x-page.content>

            <div class="news-grid">
                @foreach ($all_projects as $item)
                    <x-invest-projects.card :item="$item"></x-invest-projects.card>
                @endforeach
            </div>
        </div>
    </div>
@endsection
