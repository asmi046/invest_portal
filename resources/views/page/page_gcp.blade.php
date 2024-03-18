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
    <div class="section-with-submenu">
        <div class="inner">
            <div class="section-with-submenu__content">
                <x-breadcrumbs.main :page="_tr($page->title, isset($page->title_en)?$page->title_en:null)" :parent="$parent"></x-breadcrumbs.main>

                <div class="column-box column-box--two-col mt3 mb3">
                    <div class="bragging-block">
                        <span class="bragging-block__text">
                            {{__('Заключено соглашений')}}
                        </span>

                        <div class="bragging-block__footer">
                            {{ $optionsa['gcp_sogl_count'] }}
                            <span class="bragging-block__icon bragging-block__icon--check-file"></span>
                        </div>
                    </div>
                    <div class="bragging-block">
                        <span class="bragging-block__text">
                            {{__('Общий объем инвестиций по заключенным соглашениям (млн. р.)')}}
                        </span>

                        <div class="bragging-block__footer">
                            {{ $optionsa['gcp_sogl_pay'] }}
                            <span class="bragging-block__icon bragging-block__icon--rub"></span>
                        </div>
                    </div>
                </div>
                <a href="{{ $optionsa['kabinet_lnk'] }}" class="btn ">{{__('Заявка на услуги ГЧП')}}</a>

                <x-page.content
                    :page="$page"
                ></x-page.content>



            </div>
            <x-page.submenu :puncts="$puncts"></x-page.submenu>
        </div>
    </div>
@endsection

