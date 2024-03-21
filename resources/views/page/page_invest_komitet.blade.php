@extends('layouts.all')

@php
    extract(get_page_meta(
        "Страница инвестийионного портала Курской области",
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
            <div class="section-with-submenu__content">
                <x-breadcrumbs.main :page="_tr($page->title, isset($page->title_en)?$page->title_en:null)" :parent="$parent"></x-breadcrumbs.main>

                <x-page.content
                    :page="$page"
                ></x-page.content>

                <div class="photo_card_wrapper">
                    @foreach ($invest_comitet_contacts as $item)
                        <x-contacts.photo-card :item="$item"></x-contacts.photo-card>
                    @endforeach
                </div>
            </div>

            <x-page.submenu :puncts="$puncts"></x-page.submenu>
        </div>
    </div>
@endsection

