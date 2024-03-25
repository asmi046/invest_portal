@extends('layouts.all')

@php
    extract(get_page_meta(
        "Витрина инвестиционных проектов Курской области",
        isset($page)? $page : null
    ));
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', $page_banner)
@section('page_title', $page_title)



@section('main')
    <div class="news-page-section">
        <div class="inner">

            <x-breadcrumbs.main :title="$page_title"></x-breadcrumbs.main>

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
