@extends('layouts.all')

@php
    extract(get_page_meta(
        "Реестр инвестиционных проектов реализуемых в Курской области",
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
            <x-breadcrumbs.main :title="$page_title"></x-breadcrumbs.main>

            <x-page.content
                    :page="$page"
            ></x-page.content>
            <br>
            <br>

            <div class="ip-tab indecators-tab">
            <div class="ip-tab-controller">
                @foreach ($all_projects as $key => $items)
                    <button @class(['ip-tab-controller__btn', 'active' => $loop->index == 0])>0{{$loop->index+1}} {{ __($key) }}</button>
                @endforeach


            </div>

                        @foreach ($all_projects as $key => $items)
                            <div
                            @class(['ip-tab__display', 'active' => $loop->index == 0])>
                                <div class="reestr-project-card-box">
                                    @foreach ($items as $item)
                                        <x-reestr-project.card :item="$item"></x-reestr-project.card>
                                    @endforeach
                                </div>
                            </div>

                        @endforeach

            </div>

            {{-- <div class="reestr-project-card-box">
                @foreach ($all_projects as $item)
                    <x-reestr-project.card :item="$item"></x-reestr-project.card>
                @endforeach
            </div> --}}


        </div>
    </div>
@endsection
