@extends('layouts.all')

@php
    extract(get_page_meta(
        "Инвестиционный проект реализуемый в Курской области",
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
            <x-breadcrumbs.main :reestr="_tr($page->title, $page->title_en)"></x-breadcrumbs.main>

            @if ($page->location)
                <p>{{ __('Место реализации') }}: {{ __($page->location) }}</p>
            @endif

            <p>{{ __('Период реализации проекта') }}: <strong>{{ _tr($page->period, $page->period_en) }}</strong></p>
            <p>{{ __('Стоимость проекта') }} ({{ __('млн. ₽') }}): <strong>{{ $page->price }}</strong></p>

            @if ($page->work_places)
                <p>{{ __('Количество новых рабочих мест') }}: <strong>{{ $page->work_places }}</strong></p>
            @endif

            <p>{{ __('Статус') }}: <strong>{{ $page->state }}</strong></p>
            <p>{{ __('Инвестор') }}: <strong>{{ _tr($page->investor, $page->investor_en) }}</strong></p>

            @if ($page->img)
                <img src="{{ Storage::url('project_reestr/'.$page->img) }}" alt="{{ $page->title }}">
            @endif

            <h2>{{ __('Описание проекта')}}:</h2>
            {!! _tr($page->description, $page->description_en) !!}

        </div>
    </div>
@endsection