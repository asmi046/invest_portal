@extends('layouts.all')

@php
    $title = (empty($page->seo_title))?$page->title:$page->seo_title;
    $description = (empty($page->seo_description))?$page->title:$page->seo_description;
@endphp

@section('title', $title)
@section('description', $description)

<x-header-inner :title="$title"></x-header-inner>


@section('main')
    <div class="section-with-submenu">
        <div class="inner">
            <x-breadcrumbs.main :page="$title" :parent="$parent"></x-breadcrumbs.main>

            <div class="section-with-submenu__content">

            </div>
            <x-page.submenu :puncts="$puncts"></x-page.submenu>
        </div>
    </div>
@endsection

