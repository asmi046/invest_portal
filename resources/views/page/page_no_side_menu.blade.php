@extends('layouts.all')

@php
    $title = (empty($page->seo_title))?$page->title:$page->seo_title;
    $description = (empty($page->seo_description))?$page->title:$page->seo_description;
@endphp

@section('title', $title)
@section('description', $description)


@section('main')
    <x-header-inner :banner="$page->banner" :title="_tr($page->title, isset($page->title_en)?$page->title_en:null)"></x-header-inner>

    <div class="news-page-section">
        <div class="inner">
            <x-breadcrumbs.main :page="_tr($page->title, isset($page->title_en)?$page->title_en:null)" :parent="$parent"></x-breadcrumbs.main>

            <x-page.content
                :page="$page"
            ></x-page.content>

        </div>
    </div>
@endsection

