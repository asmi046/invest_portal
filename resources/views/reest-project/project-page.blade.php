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
    <div class="project-page-section">
        <div class="inner">
            <x-breadcrumbs.main :reestr="_tr($page->title, $page->title_en)"></x-breadcrumbs.main>

            <div class="project-present">
                <div class="project-present__left-col">
                    @if ($page->img)
                        <div class="lightgallery" data-src="{{asset('img/poster-1.jpg')}}">
                            <img src="{{ Storage::url('project_reestr/'.$page->img) }}" alt="{{ $page->title }}">
                        </div>
                    @endif
                </div>
                <div class="project-present__right-col">
                    <ul>
                        @if ($page->location)
                            <li>{{ __('Место реализации') }}: {{ __($page->location) }}</li>
                        @endif

                        <li>{{ __('Период реализации проекта') }}: <strong>{{ _tr($page->period, $page->period_en) }}</strong></li>
                        <li>{{ __('Стоимость проекта') }} ({{ __('млн. ₽') }}): <strong>{{ $page->price }}</strong></li>

                        @if ($page->work_places)
                            <li>{{ __('Количество новых рабочих мест') }}: <strong>{{ $page->work_places }}</strong></li>
                        @endif

                        <li>{{ __('Статус') }}: <strong>{{ $page->state }}</strong></li>
                        <li>{{ __('Инвестор') }}: <strong>{{ _tr($page->investor, $page->investor_en) }}</strong></li>
                    </ul>


                </div>
            </div>
            <h2>{{ __('Описание проекта')}}:</h2>
            {!! _tr($page->description, $page->description_en) !!}

        </div>
    </div>
@endsection
