@extends('layouts.all')

@php
    $title = (empty($page->seo_title))?$page->title:$page->seo_title;
    $description = (empty($page->seo_description))?$page->title:$page->seo_description;
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


            @foreach ($docs as $key => $value)
                <h4>{{ $key }}</h4>
                <div class="columns-box columns-box--two-col">
                    @foreach ($value as $item)
                        <x-widget-file
                        :lnk="Storage::url($item->file)"
                        :title="$item->title"
                        ></x-widget-file>
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>
@endsection

