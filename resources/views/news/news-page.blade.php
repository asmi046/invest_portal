@extends('layouts.all')

@php
    $title = (empty($news->seo_title))?$news->title:$news->seo_title;
    $description = (empty($news->seo_description))?$news->title:$news->seo_description;
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', '')
@section('page_title', $title)


@section('main')

    <section class="news-page-section">
        <div class="inner">
            <x-breadcrumbs.main :news="$title"></x-breadcrumbs.main>
            {{-- <a href="{{route('news_list')}}" class="back-link">Назад к списку</a> --}}
            @if($news->img)
                <a href="{{ $news->img }}" class="lg-gallery page-photo">
                    <img src="{{$news->img}}" alt="">
                </a>
            @else
                <a href="{{asset('img/nophoto.jpg')}}" class="lg-gallery page-photo">
                    <img src="{{asset('img/nophoto.jpg')}}" alt="">
                </a>
            @endif
            <span class="news-date">{{ data_ru($news->public_time) }} г.</span>
            {!! $news->description !!}
        </div>
    </section>
@endsection
