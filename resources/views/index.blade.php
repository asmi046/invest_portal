@extends('layouts.all')

@php
    $title = "Инвестиционный портал Курской области";
    $description = "Привлекательный регион для осуществления эффективных международных проектов и инвестиционных программ.";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-main-page.gubernator></x-main-page.gubernator>

    <section class="indecators-section section-space">
        <div class="inner">
            <x-region-parametrs.region-parametr-section></x-region-parametrs.region-parametr-section>
        </div>
    </section>


    <section class="advantages-section section-space">
        <div class="inner">
            <h2 class="section-title">
                {{ __('Конкурентные преимущества') }}
            </h2>
            <div class="advantages-grid">
                <div class="advantages">
                    <div class="advantages__icon sprout-icon"></div>
                    <span class="advantages__caption ">
                        {{ _tr($optionsa['advantage_1'], $optionsa['advantage_1_en']) }}
                    </span>
                    <span class="advantages__description">
                        {{ _tr($optionsa['advantage_1_text'], $optionsa['advantage_1_text_en']) }}
                    </span>
                </div>
                <div class="advantages">
                    <div class="advantages__icon mapmarker-icon"></div>
                    <span class="advantages__caption">
                        {{ _tr($optionsa['advantage_2'], $optionsa['advantage_2_en']) }}
                    </span>
                    <span class="advantages__description">
                        {{ _tr($optionsa['advantage_2_text'], $optionsa['advantage_2_text_en']) }}
                    </span>
                </div>
                <div class="advantages">
                    <div class="advantages__icon lamp-icon"></div>
                    <span class="advantages__caption">
                        {{ _tr($optionsa['advantage_3'], $optionsa['advantage_3_en']) }}
                    </span>
                    <span class="advantages__description">
                        {{ _tr($optionsa['advantage_3_text'], $optionsa['advantage_3_text_en']) }}
                    </span>
                </div>
                <div class="advantages">
                    <div class="advantages__icon truck-icon"></div>
                    <span class="advantages__caption">
                        {{ _tr($optionsa['advantage_4'], $optionsa['advantage_4_en']) }}
                    </span>
                    <span class="advantages__description">
                        {{ _tr($optionsa['advantage_4_text'], $optionsa['advantage_4_text_en']) }}
                    </span>
                </div>
            </div>
        </div>
    </section>

    <x-main-page.map-section></x-main-page.map-section>


    @if (App::isLocale('ru'))
        <section class="news-section section-space">
            <div class="inner">
                <h2 class="section-title">Новости портала</h2>
                <p class="subtitle">Актуальная информация об экономике региона, как для жителей области, так и для потенциальных инвесторов.</p>
                <div class="news-grid">

                    @isset($main_news)
                        @foreach ($main_news as $item)
                            <x-news.card :item="$item"></x-news.card>
                        @endforeach
                    @endisset
                </div>
                <a href="{{route('news_list')}}" class="btn">Все новости</a>
            </div>
        </section>
    @endif


    <x-main-page.gos-support></x-main-page.gos-support>

    <section class="useful-resources-section section-space">
        <div class="inner">
            <h2 class="section-title">{{__('Полезные ресурсы')}}</h2>

            <div class="useful-resources-sl-box">
                <!-- Slider main container -->
                <div class="swiper useful-resources-sl">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        @foreach ($resurces as $item)
                            <x-resurc.card :item="$item"></x-resurc.card>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
@endsection

