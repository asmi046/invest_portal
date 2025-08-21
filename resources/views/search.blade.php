@extends('layouts.all')

@php
    extract(get_page_meta(
        "Страница инвестийионного портала Курской области",
        isset($page)? $page : null
    ));
@endphp

@section('title', 'Результаты поиска: ' . $s)
@section('description', 'Результаты поиска: ' . $s)
{{-- @section('banner', $page_banner) --}}
@section('page_title', 'Результаты поиска: ' . $s)

@section('main')
    <div class="section-with-submenu">
        <div class="inner">
            <div class="section-with-submenu__content">
                <x-breadcrumbs.main :title="'Результаты поиска: ' . $s"></x-breadcrumbs.main>

                <div class="search-results">
                    <h2>Результаты поиска: {{ $s }}</h2>
                    @if(!$results)
                        <p>По вашему запросу ничего не найдено.</p>
                    @else
                        <h3 class="search-results__subtitle">Страницы:</h3>
                            @foreach($results['pages'] as $result)
                                <div class="search_result">
                                    <a href="{{ route('page', ['slug' => $result->slug]) }}">
                                        {{ $result->title }}
                                    </a>
                                    <p>{!! Str::limit(strip_tags($result->description), 200, '...') !!}</p>
                                </div>
                            @endforeach
                        <h3 class="search-results__subtitle">Новости:</h3>
                            @foreach($results['news'] as $result)
                                <div class="search_result">
                                    <a href="{{ route('news_page', ['slug' => $result->slug]) }}">
                                        {{ $result->title }}
                                    </a>
                                    <p>{!! Str::limit(strip_tags($result->description), 200, '...') !!}</p>
                                </div>
                            @endforeach

                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection

