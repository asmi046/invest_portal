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

            <div class="measure-support">
                <div class="measure-support__img-box"  data-src="{{asset('img/poster-1.jpg')}}">
                    <img src="{{ Storage::url("support_m/".$page->inner_img)}}" alt="{{$page_title}}">
                </div>
                <div class="measure-support__description">
                    {!! $page->short_description !!}
                </div>
            </div>
            {!! $page->description !!}

        </div>
    </div>
@endsection
