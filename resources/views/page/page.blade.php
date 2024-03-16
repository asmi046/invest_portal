@extends('layouts.all')

@php
    $title = (empty($page->seo_title))?$page->title:$page->seo_title;
    $description = (empty($page->seo_description))?$page->title:$page->seo_description;
@endphp

@section('title', $title)
@section('description', $description)



@section('main')
    <x-header-inner :banner="$page->banner" :title="$title"></x-header-inner>
    <div class="section-with-submenu">
        <div class="inner">
            <div class="section-with-submenu__content">
                <x-breadcrumbs.main :page="$title" :parent="$parent"></x-breadcrumbs.main>

                <x-page.content
                    :page="$page"
                ></x-page.content>

            </div>
            <x-page.submenu :puncts="$puncts"></x-page.submenu>
        </div>
    </div>
@endsection

