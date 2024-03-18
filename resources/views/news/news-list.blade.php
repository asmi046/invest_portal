@extends('layouts.all')

@php
    $title = "Новости инвестиционного портала Курской области";
    $description = "Весь список новостей инвестиционного портала Курской области";
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', null)
@section('page_title', $title)

@section('main')
    <section class="news-list-section">
        <div class="inner">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
            <div class="news-grid">

                @foreach ($all_news as $item)
                    <x-news.card :item="$item"></x-news.card>
                @endforeach

            </div>

            <x-pagination :tovars="$all_news"></x-pagination>

        </div>
    </section>
@endsection
