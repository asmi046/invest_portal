@extends('layouts.all')

@php
    $title = "Новости инвестиционного портала Курской области";
    $description = "Весь список новостей инвестиционного портала Курской области";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-header-inner :title="$title"></x-header-inner>
    <section class="news-list-section">
        <div class="inner">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
            <div class="news-grid">

                @foreach ($all_news as $item)
                    <x-news.card :item="$item"></x-news.card>
                @endforeach

            </div>

            <x-pagination :tovars="$all_news"></x-pagination>

            {{-- <ul class="pagination">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><span>...</span></li>
                <li><a href="#">41</a></li>
            </ul> --}}
        </div>
    </section>
@endsection
