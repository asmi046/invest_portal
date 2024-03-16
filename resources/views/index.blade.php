@extends('layouts.all')

@php
    $title = "Инвестиционный портал Курской области";
    $description = "Привлекательный регион для осуществления эффективных международных проектов и инвестиционных программ.";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <x-header></x-header>

    <x-main-page.gubernator></x-main-page.gubernator>

    <section class="indecators-section section-space">
        <div class="inner">
            <h2 class="section-title">Основные показатели региона</h2>
            <div class="ip-tab indecators-tab">
                <div class="ip-tab-controller">
                    <button class="ip-tab-controller__btn active">01 Показатели региона</button>
                    <button class="ip-tab-controller__btn">02 Промышленность</button>
                    <button class="ip-tab-controller__btn">03 Сельское хозяйство</button>
                    <button class="ip-tab-controller__btn">04 Строительство</button>
                </div>
                <div class="ip-tab__display active">
                    <div class="indecators-grid">
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                5,7 млн. тонн
                            </div>
                            <span class="indecators__period">данные на 1 января 2023 года</span>
                            <span class="indecators__field-of-activity">Валовый сбор (в весе после доработки)</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                79,3 млн. штук
                            </div>
                            <span class="indecators__period">данные за январь-июнь 2023 год</span>
                            <span class="indecators__field-of-activity">Производство яиц</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green indecators__arrow--down"> </span>
                            <div class="indecators__indicator">
                                0,4 %
                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Уровень регистрируемой безработицы</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--red indecators__arrow--top"> </span>
                            <div class="indecators__indicator">
                                0,9 %
                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Уровень преступности</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--red indecators__arrow--down"> </span>
                            <div class="indecators__indicator">
                                1,5 %

                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Доходы населения</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                281,6 млрд. руб.
                            </div>
                            <span class="indecators__period">данные за январь-июнь 2023 года</span>
                            <span class="indecators__field-of-activity">Объем отгруженных товаров собственного производства, выполненных работ и услуг</span>
                        </div>
                    </div>
                </div>
                <div class="ip-tab__display">
                    <div class="indecators-grid">
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                79,3 млн. штук
                            </div>
                            <span class="indecators__period">данные за январь-июнь 2023 год</span>
                            <span class="indecators__field-of-activity">Производство яиц</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                5,7 млн. тонн
                            </div>
                            <span class="indecators__period">данные на 1 января 2023 года</span>
                            <span class="indecators__field-of-activity">Валовый сбор (в весе после доработки)</span>
                        </div>

                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green indecators__arrow--down"> </span>
                            <div class="indecators__indicator">
                                0,4 %
                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Уровень регистрируемой безработицы</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--red indecators__arrow--top"> </span>
                            <div class="indecators__indicator">
                                0,9 %
                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Уровень преступности</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--red indecators__arrow--down"> </span>
                            <div class="indecators__indicator">
                                1,5 %

                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Доходы населения</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                281,6 млрд. руб.
                            </div>
                            <span class="indecators__period">данные за январь-июнь 2023 года</span>
                            <span class="indecators__field-of-activity">Объем отгруженных товаров собственного производства, выполненных работ и услуг</span>
                        </div>
                    </div>
                </div>
                <div class="ip-tab__display">
                    <div class="indecators-grid">
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green indecators__arrow--down"> </span>
                            <div class="indecators__indicator">
                                0,4 %
                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Уровень регистрируемой безработицы</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                5,7 млн. тонн
                            </div>
                            <span class="indecators__period">данные на 1 января 2023 года</span>
                            <span class="indecators__field-of-activity">Валовый сбор (в весе после доработки)</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                79,3 млн. штук
                            </div>
                            <span class="indecators__period">данные за январь-июнь 2023 год</span>
                            <span class="indecators__field-of-activity">Производство яиц</span>
                        </div>

                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--red indecators__arrow--top"> </span>
                            <div class="indecators__indicator">
                                0,9 %
                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Уровень преступности</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--red indecators__arrow--down"> </span>
                            <div class="indecators__indicator">
                                1,5 %

                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Доходы населения</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                281,6 млрд. руб.
                            </div>
                            <span class="indecators__period">данные за январь-июнь 2023 года</span>
                            <span class="indecators__field-of-activity">Объем отгруженных товаров собственного производства, выполненных работ и услуг</span>
                        </div>
                    </div>
                </div>
                <div class="ip-tab__display">
                    <div class="indecators-grid">
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--red indecators__arrow--down"> </span>
                            <div class="indecators__indicator">
                                1,5 %
                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Доходы населения</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                5,7 млн. тонн
                            </div>
                            <span class="indecators__period">данные на 1 января 2023 года</span>
                            <span class="indecators__field-of-activity">Валовый сбор (в весе после доработки)</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                79,3 млн. штук
                            </div>
                            <span class="indecators__period">данные за январь-июнь 2023 год</span>
                            <span class="indecators__field-of-activity">Производство яиц</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green indecators__arrow--down"> </span>
                            <div class="indecators__indicator">
                                0,4 %
                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Уровень регистрируемой безработицы</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--red indecators__arrow--top"> </span>
                            <div class="indecators__indicator">
                                0,9 %
                            </div>
                            <span class="indecators__period">данные на 1 августа 2023 года</span>
                            <span class="indecators__field-of-activity">Уровень преступности</span>
                        </div>
                        <div class="indecators">
                            <span class="indecators__arrow indecators__arrow--green"> </span>
                            <div class="indecators__indicator">
                                281,6 млрд. руб.
                            </div>
                            <span class="indecators__period">данные за январь-июнь 2023 года</span>
                            <span class="indecators__field-of-activity">Объем отгруженных товаров собственного производства, выполненных работ и услуг</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages-section section-space">
        <div class="inner">
            <h2 class="section-title">
                Конкурентные преимущества
            </h2>
            <div class="advantages-grid">
                <div class="advantages">
                    <div class="advantages__icon sprout-icon"></div>
                    <span class="advantages__caption ">
                        Природные ресурсы
                    </span>
                    <span class="advantages__description">
                        Курская область расположена в центре Курской железорудной провинции, известной, как Курская магнитная аномалия, обеспечивая сырьем российскую и зарубежную металлургию.
                    </span>
                </div>
                <div class="advantages">
                    <div class="advantages__icon mapmarker-icon"></div>
                    <span class="advantages__caption">
                        Энергообеспеченность
                    </span>
                    <span class="advantages__description">
                        Регион обладает высокой энергообеспеченностью и наличием резервов электроэнергетических мощностей за счет работы Курской АЭС. Удельный вес региона в Российской федерации по производству и распределению электроэнергии, газа и воды составляет 1,3 %. Более 70 % вырабатываемой электроэнергии подается в 19 областей России.
                    </span>
                </div>
                <div class="advantages">
                    <div class="advantages__icon lamp-icon"></div>
                    <span class="advantages__caption">
                        Логистика
                    </span>
                    <span class="advantages__description">
                        По территории области проходят две железнодорожные магистрали: «Москва-Харьков» и «Воронеж-Киев»; расположены три крупных железнодорожных узла: Курск, Льгов, Касторная. Автотрассы и железнодорожная сеть связывают Курскую область с Москвой, Санкт-Петербургом и другими городами России, промышленно-развитыми центрами Украины и Закавказья.
                    </span>
                </div>
                <div class="advantages">
                    <div class="advantages__icon truck-icon"></div>
                    <span class="advantages__caption">
                        Географическое положение
                    </span>
                    <span class="advantages__description">
                        Курская область динамично развивающийся промышленно- аграрный регион. Территория области занимает площадь 30 тыс. км2 и расположена на пересечении важнейших транспортных и торговых путей России, соединяющих запад и восток, север и юг.
                    </span>
                </div>
            </div>
        </div>
    </section>

    <x-main-page.map-section></x-main-page.map-section>


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

    <x-main-page.gos-support></x-main-page.gos-support>

    <section class="useful-resources-section section-space">
        <div class="inner">
            <h2 class="section-title">Полезные ресурсы</h2>

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

