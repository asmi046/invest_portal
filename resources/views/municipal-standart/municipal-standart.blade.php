@extends('layouts.all')

@php
    $main_title = "Муниципальный инвестиционный стандарт";
    if (isset($page)) {
        $title = (empty($page->seo_title))?$page->title:$page->seo_title;
        $description = (empty($page->seo_description))?$page->title:$page->seo_description;
    } else {
        $title = $main_title;
        $description = $main_title;
    }

@endphp

@section('title', $title)
@section('description', $description)



@section('main')
    <x-header-inner :banner="$page->banner" :title="$title"></x-header-inner>
    <div class="news-page-section">
        <div class="inner">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>

            <x-page.content
                    :page="$page"
            ></x-page.content>


            @foreach ($m_standart as $key => $value)
                <h4>{{ $key }}</h4>
                <div class="m_standart_wrapper columns-box columns-box--two-col">
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

