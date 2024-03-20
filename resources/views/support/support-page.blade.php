@extends('layouts.all')

@php
    extract(get_page_meta(
        "Мера поддержки инвестора Курской области",
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
            <x-breadcrumbs.main :support="$page_title"></x-breadcrumbs.main>

            <div class="support_top">
                <div class="support_top__img-wrapper">
                    <img src="{{ Storage::url("support_m/".$page->inner_img)}}" alt="{{$page_title}}">
                </div>
                <div class="support_top__short-description">
                    {!! $page->short_description !!}
                </div>
            </div>

            <div class="support_descripton">
                {!! $page->description !!}
            </div>

        </div>
    </div>
@endsection
