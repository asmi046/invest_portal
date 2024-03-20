@extends('layouts.all')

@php
    extract(get_page_meta(
        "Регламент «Одно окно»",
        isset($page)? $page : null
    ));
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', $page_banner)
@section('page_title', $page_title)

@section('main')
    <div class="section-with-submenu">
        <div class="inner">
            <div class="section-with-submenu__content">
                <x-breadcrumbs.main :page="_tr($page->title, isset($page->title_en)?$page->title_en:null)" :parent="$parent"></x-breadcrumbs.main>

                <x-one-win.schem></x-one-win.schem>

                <x-page.content
                    :page="$page"
                ></x-page.content>

            </div>
            <x-page.submenu-template :puncts="$all_menu['Регламент одного окна']"></x-page.submenu-template>
        </div>
    </div>
@endsection

