@extends('layouts.all')

@php
    extract(get_page_meta(
        "Все меры поддержки инвесторов действующие в Курской области",
        isset($page)? $page : null
    ));


@endphp

@section('title', $title)
@section('description', $description)
@section('banner', empty($page_banner)? asset('img/top_img/sunset.webp') :$page_banner)
@section('page_title', $page_title)

@section('main')
    <div class="news-page-section">
        <div class="inner">

            <x-breadcrumbs.main :title="$page_title"></x-breadcrumbs.main>

            @if (isset($page))
                <x-page.content
                    :page="$page"
                ></x-page.content>
            @endif



            <div class="ip-tab">
                <div class="ip-tab-controller">
                    @foreach ($all_support as $key => $item)
                        <button  @class(['ip-tab-controller__btn', 'active' => $key === 'Меры поддержки инвестора']) >{{ $key }}</button>
                    @endforeach
                </div>

                @foreach ($all_support as $key => $item)
                    <div @class(['ip-tab__display', 'active' => $key === 'Меры поддержки инвестора'])>
                        <div class="columns-box columns-box--two-col">

                            @foreach ($item as $subitem)
                                <x-icon-link-box :lnk="route('support_page', $subitem->slug)"
                                    :title="$subitem->title"
                                    :icon="($key !== 'Меры поддержки инвестора')?'paper-icon':'market-icon'"
                                    ></x-icon-link-box>

                            @endforeach
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

        </div>
    </div>
@endsection
