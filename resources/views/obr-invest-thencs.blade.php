@extends('layouts.all')

@php
    extract(get_page_meta(
        "Благодарим за обращение",
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
        <p>Наши специалисты свяжутся с Вами в ближайшее время.</p>
    </div>
</div>

@endsection
