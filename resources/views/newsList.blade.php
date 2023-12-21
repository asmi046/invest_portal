@extends('layouts.all')

@php
    $title = "Заголовок";
    $description = "Дескрипшен";
    $pageTitle = "Новости портала"
@endphp

@section('title', $title)
@section('description', $description)

<x-header-inner :pageTitle="$pageTitle"></x-header-inner>

@section('main')
    <section class="news-list-section">
        <div class="inner">
            <div class="news-grid">
                <a href="{{route("news_page")}}" class="news">
                    <img src="../img/news-img.webp" class="news__news-img" alt="">
                    <span class="news__content">
                        <span class="news__date">08.12.2023</span>
                        <span class="news__caption">
                            Курская область в 2023 году досрочно внедрила Региональный экспортный стандарт 2.0
                        </span>
                    </span>
                </a>
                <a href="{{route("news_page")}}"  class="news">
                    <img src="../img/news-img.webp" class="news__news-img" alt="">
                    <span class="news__content">
                        <span class="news__date">08.12.2023</span>
                        <span class="news__caption">
                            Курская область в 2023
                        </span>
                    </span>
                </a>
                <a href="{{route("news_page")}}"  class="news">
                    <img src="../img/news-img.webp" class="news__news-img" alt="">
                    <span class="news__content">
                        <span class="news__date">08.12.2023</span>
                        <span class="news__caption">
                            Курская область в 2023 году досрочно внедрила Региональный экспортный стандарт 2.0
                        </span>
                    </span>
                </a>
                <a href="{{route("news_page")}}"  class="news">
                    <img src="../img/news-img.webp" class="news__news-img" alt="">
                    <span class="news__content">
                        <span class="news__date">08.12.2023</span>
                        <span class="news__caption">
                            Курская область в 2023 году досрочно внедрила Региональный экспортный стандарт 2.0
                        </span>
                    </span>
                </a>
                <a href="{{route("news_page")}}"  class="news">
                    <img src="../img/news-img.webp" class="news__news-img" alt="">
                    <span class="news__content">
                        <span class="news__date">08.12.2023</span>
                        <span class="news__caption">
                            Курская область в 2023 году досрочно внедрила Региональный экспортный стандарт 2.0
                        </span>
                    </span>
                </a>
                <a href="{{route("news_page")}}"  class="news">
                    <img src="../img/news-img.webp" class="news__news-img" alt="">
                    <span class="news__content">
                        <span class="news__date">08.12.2023</span>
                        <span class="news__caption">
                            Курская область в 2023 году досрочно внедрила Региональный экспортный стандарт 2.0
                        </span>
                    </span>
                </a>
                <a href="{{route("news_page")}}"  class="news">
                    <img src="../img/news-img.webp" class="news__news-img" alt="">
                    <span class="news__content">
                        <span class="news__date">08.12.2023</span>
                        <span class="news__caption">
                            Курская область в 2023 году досрочно внедрила Региональный экспортный стандарт 2.0
                        </span>
                    </span>
                </a>
                <a href="{{route("news_page")}}"  class="news">
                    <img src="../img/news-img.webp" class="news__news-img" alt="">
                    <span class="news__content">
                        <span class="news__date">08.12.2023</span>
                        <span class="news__caption">
                            Курская область в 2023 году досрочно внедрила Региональный экспортный стандарт 2.0
                        </span>
                    </span>
                </a>
                <a href="{{route("news_page")}}"  class="news">
                    <img src="../img/news-img.webp" class="news__news-img" alt="">
                    <span class="news__content">
                        <span class="news__date">08.12.2023</span>
                        <span class="news__caption">
                            Курская область в 2023 году досрочно внедрила Региональный экспортный стандарт 2.0
                        </span>
                    </span>
                </a>
                <a href="{{route("news_page")}}"  class="news">
                    <img src="../img/news-img.webp" class="news__news-img" alt="">
                    <span class="news__content">
                        <span class="news__date">08.12.2023</span>
                        <span class="news__caption">
                            Курская область в 2023 году досрочно внедрила Региональный экспортный стандарт 2.0
                        </span>
                    </span>
                </a>
            </div>
            <ul class="pagination">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><span>...</span></li>
                <li><a href="#">41</a></li>
            </ul>
        </div>
    </section>
@endsection
