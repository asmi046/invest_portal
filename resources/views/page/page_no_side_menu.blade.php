@extends('layouts.all')

@php
    $title = (empty($page->seo_title))?$page->title:$page->seo_title;
    $description = (empty($page->seo_description))?$page->title:$page->seo_description;
@endphp

@section('title', $title)
@section('description', $description)

<x-header-inner :banner="$page->banner" :title="$title"></x-header-inner>

@section('main')
    <div class="news-page-section">
        <div class="inner">
            <x-breadcrumbs.main :page="$title" :parent="$parent"></x-breadcrumbs.main>

            @if($page->img)
                <a href="{{ $page->img }}" class="lg-gallery page-photo">
                    <img src="{{$page->img}}" alt="">
                </a>
            @endif
            {!! $page->description !!}
        </div>
    </div>
@endsection

