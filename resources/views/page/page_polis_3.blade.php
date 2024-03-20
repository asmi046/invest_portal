@extends('layouts.all')

@php
    extract(get_page_meta(
        "Особая экономическая зона промышленно-производственного типа «Третий полюс»",
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

                <x-page.content
                    :page="$page"
                ></x-page.content>

                <h2>Основные показатели к 2031 году</h2>
                <div class="column-box column-box--two-col mt3 mb3">
                    <x-inform-card title="Рабочих мест" :value="$optionsa['polis_3_work_mest']" icon="check-file"></x-inform-card>
                    <x-inform-card title="Объем инвестиций резидентов (млн. р.)" :value="$optionsa['polis_3_invest']" icon="rub"></x-inform-card>
                    <x-inform-card title="Общая площадь (га.)" :value="$optionsa['polis_3_ploshad']" icon="check-file"></x-inform-card>
                    <x-inform-card title="Срок существования ОЭЗ (лет)" :value="$optionsa['polis_3_srok']" icon="check-file"></x-inform-card>
                </div>

            </div>
            <x-page.submenu-template :puncts="$all_menu['Меню Третий полюс']"></x-page.submenu-template>
        </div>
    </div>
@endsection

