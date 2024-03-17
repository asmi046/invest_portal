@extends('layouts.all')

@php
    $main_title = "Муниципальный инвестиционный стандарт района";
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
    <x-header-inner :banner="asset('img/top_img/industry.webp')" :title="_tr($page->title, $page->title_en)"></x-header-inner>
    <div class="news-page-section">
        <div class="inner">
            <x-breadcrumbs.main :ms="_tr($page->title, $page->title_en)"></x-breadcrumbs.main>

            {!! _tr($page->description, $page->description_en) !!}

            @if ($page->passport_files)
                <h2>{{__('Паспорт муниципального образования')}}</h2>
                @foreach ($page->passport_files as $item)
                    <x-widget-file
                        :lnk="Storage::url('munitipal_standarts/'.$item['file'])"
                        :title="_tr($item['title'], $item['title_en'])"
                    ></x-widget-file>
                @endforeach
            @endif



            <h2>{{__('Глава района')}}</h2>
            <div class="glava_info">
                <div class="foto_wrap">
                    <img src="{{ Storage::url("munitipal_standarts/".$page->glava_photo) }}" alt="{{$page->glava}}">
                </div>



                <div class="contacts">
                    <h3>{{ _tr($page->glava, $page->glava_en) }}</h3>
                    <p><strong>{{__('Адрес')}}:</strong> {{_tr($page->address,$page->address_en)}}</p>
                    <p><strong>{{__('Телефон')}}:</strong> {{$page->phone}}</p>
                    <p><strong>{{__('Сайт')}}:</strong> {{$page->site}}</p>
                    <p><strong>{{__('e-mail')}}:</strong> {{$page->email}}</p>
                </div>

            </div>
        </div>
    </div>
@endsection

