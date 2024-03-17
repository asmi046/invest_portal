@extends('layouts.all')

@php
    extract(get_page_meta(
        "Муниципальный инвестиционный стандарт района",
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
            <x-breadcrumbs.main :ms="_tr($page->title, $page->title_en)"></x-breadcrumbs.main>

            {!! _tr($page->description, $page->description_en) !!}

            @if ($page->passport_files)
                <h2>{{__('Паспорт муниципального образования')}}</h2>
                @foreach ($page->passport_files as $item)
                    <x-widget-file
                        :lnk="Storage::url('munitipal_standarts/'.$item->file)"
                        :title="_tr($item->title, isset($item->title_en)?$item->title_en:null)"
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

