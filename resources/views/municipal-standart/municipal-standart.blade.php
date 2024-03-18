@extends('layouts.all')

@php
    extract(get_page_meta(
        "Муниципальный инвестиционный стандарт",
        isset($page)? $page : null
    ));
@endphp

@section('title', $title)
@section('description', $description)
@section('page_title', $page_title)



@section('main')
    <div class="news-page-section">
        <div class="inner">

            <x-breadcrumbs.main :title="$page_title"></x-breadcrumbs.main>

            <x-page.content
                    :page="$page"
            ></x-page.content>


            @foreach ($m_standart as $key => $value)
                <h4>{{ __($key) }}</h4>
                <div class="m_standart_wrapper">
                    @foreach ($value as $item)
                        <x-municipal-standart.card
                            :item="$item"
                        ></x-municipal-standart.card>
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>
@endsection

