@extends('layouts.all')

@php
    extract(get_page_meta(
        "Пример",
        isset($page)? $page : null
    ));
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', $page_banner)
@section('page_title', $page_title)



@section('main')
    <div class="inner">
        <ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="/" title="Главная" itemprop="item">
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="0">
                </a></li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="/razdel/" title="Раздел" itemprop="item">
                    <span itemprop="name">Раздел</span>
                    <meta itemprop="position" content="1">
                </a></li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="/razdel/podrazdel/" title="Подраздел" itemprop="item">
                    <span itemprop="name">Подраздел</span>
                    <meta itemprop="position" content="2">
                </a>
            </li>
        </ul>
    </div>
    <section class="section-with-submenu">
        <div class="inner">
            <div class="section-with-submenu__content">

                <x-contacts.ghp-contacts></x-contacts.ghp-contacts>
                <p>
                    Миссия государственно-частного партнерства в Курской области: создание качественной социальной инфраструктуры региона путем повышения инвестиционной привлекательности Курской области и поддержки инвестиционных проектов с применением механизмов ГЧП.
                </p>
                <div class="column-box column-box--two-col mt3 mb3">
                    <div class="bragging-block">
                        <span class="bragging-block__text">
                            Заключено соглашений
                        </span>

                        <div class="bragging-block__footer">
                            30
                            <span class="bragging-block__icon bragging-block__icon--check-file"></span>
                        </div>
                    </div>
                    <div class="bragging-block">
                        <span class="bragging-block__text">
                            Общий объем инвестиций по заключенным соглашениям
                        </span>

                        <div class="bragging-block__footer">
                            21 236
                            <span class="bragging-block__icon bragging-block__icon--rub"></span>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn ">Заявка на услуги ГЧП</a>
                <h2>
                    Пример заголовка 2-го уровня
                </h2>
                <h3>
                    Пример заголовка 3-го уровня
                </h3>
                <h4>
                    Пример заголовка 4-го уровня
                </h4>
                <h5>
                    Пример заголовка 5-го уровня
                </h5>
                <h6>
                    Пример заголовка 6-го уровня
                </h6>
                <p>
                    <b>Курская область</b> – развитый и достаточно экологически чистый промышленно-аграрный регион, располагается в климатической зоне, благоприятной для ведения интенсивного земледелия и животноводства, обладает уникальными по объемам и разнообразию природными ресурсами, развитой транспортной инфраструктурой, высоким уровнем энергообеспеченности.
                </p>
                <h2>
                    Географическое положение
                </h2>
                <p>
                    Курская область – субъект Российской Федерации, входит в состав Центрального федерального округа. Административный центр – Курск.
                </p>
                <p>
                    Курская область граничит на северо-западе с Брянской, на севере - с Орловской, на северо-востоке – с Липецкой, на востоке – с Воронежской, на юге – с Белгородской областями; с юго-западной и западной стороны к ней примыкает Сумская область Украины. Образована 13 июня 1934 года.
                </p>
                <p>
                    Площадь области равна 29,8 тыс. км². Протяжённость с севера на юг составляет 171 км, а с запада на восток 305 км.
                </p>
                <p>
                    Население– 1 067,0 тыс. человек (на 1 января 2023 года), в том числе: городское население – 730,8 тыс. человек, сельское население – 336,3 тыс. человек.
                </p>
                <h2>Использование разных тегов</h2>
                <p>
                    <abbr title="Всероссийская чрезвычайная комиссия">ВЧК</abbr>— специальный орган по борьбе с контрреволюцией и саботажем в Советском государстве в 1917–1922 годах.
                </p>
                <blockquote cite="https://ru.citaty.net/avtory/vladimir-ilich-lenin/">
                    <p>„Люди всегда были и всегда будут глупенькими жертвами обмана и самообмана в политике, пока они не научатся за любыми нравственными, религиозными, политическими, социальными фразами, заявлениями, обещаниями разыскивать интересы тех или иных классов.“ </p>
                    <footer><b>В.И. Ленин,</b> <cite>Три источника и три составных части марксизма (март 1913 г.).— ПСС, 5-е изд., т. 23, с. 47.</cite></footer>
                </blockquote>
                <p>
                    В этом абзаце имеется <b>жирный шрифт</b>, <u>подчеркнутый текст</u>, <s>зачеркнутый текст</s> и <i>курсивный шрифт</i>
                </p>
                <p>Ниже будут представлены теги форматирования текста, которые похожи на показанные выше, но уже используемые в SEO</p>
                <p>
                    В этом абзаце имеется <strong>жирный шрифт</strong>, <ins>подчеркнутый текст</ins>, <del>зачеркнутый текст</del> и <em>курсивный шрифт</em>
                </p>
                <ul>
                    <li>Пункт меню</li>
                    <li>Пункт меню</li>
                    <li>Пункт меню</li>
                    <li>Пункт меню</li>
                    <li>Пункт меню</li>
                </ul>
                <ol>
                    <li>Пункт меню</li>
                    <li>Пункт меню</li>
                    <li>Пункт меню</li>
                    <li>Пункт меню</li>
                    <li>Пункт меню</li>
                </ol>
                <div class="table-box">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>ФИО</th>
                                <th>Должность</th>
                                <th>Год</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Иванов И.И.</td>
                                <td>Инженер</td>
                                <td>2020</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Иванов И.И.</td>
                                <td>Инженер</td>
                                <td>2020</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Иванов И.И.</td>
                                <td>Инженер</td>
                                <td>2020</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Иванов И.И.</td>
                                <td>Инженер</td>
                                <td>2020</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="ip-tab">
                    <div class="ip-tab-controller">
                        <button class="ip-tab-controller__btn active">Видеоинструкции</button>
                        <button class="ip-tab-controller__btn">Нормативно-правовая база для Инвестора</button>
                    </div>
                    <div class="ip-tab__display active">
                        <div class="columns-box columns-box--two-col">
                            <div class="video-box">
                                {{-- <iframe src="https://www.youtube.com/embed/94-KCPOxd2Y?si=Cvt3hL7NKihOVJFG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  --}}
                                <video  poster="{{asset('img/poster-1.jpg')}}">
                                    <source src="{{asset('video/heli-video.mp4')}}" type="video/mp4">
                                </video>
                                <button type="button" class="video-box__video-play"></button>
                            </div>
                            <div class="video-box">
                                {{-- <iframe  src="https://www.youtube.com/embed/94-KCPOxd2Y?si=Cvt3hL7NKihOVJFG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
                                <video  poster="{{asset('img/poster-2.jpg')}}">
                                    <source src="{{asset('video/heli-video.mp4')}}" type="video/mp4">
                                </video>
                                <button type="button" class="video-box__video-play"></button>
                            </div>
                        </div>
                    </div>
                    <div class="ip-tab__display">
                        <div class="columns-box columns-box--two-col">
                            <div class="doc-link">
                                <span class="doc-link__caption">
                                    Название документа для скачивания или еще чего нибудь
                                </span>
                                <a target="_blank" href="#" class="doc-link__download">Скачать</a>
                            </div>
                            <div class="doc-link">
                                <span class="doc-link__caption">
                                    Название документа для скачивания или еще чего нибудь
                                </span>
                                <a target="_blank" href="#" class="doc-link__download">Скачать</a>
                            </div>


                        </div>
                    </div>
                </div>
                <h2>Ниже представлены примеры размещения изображений с подключенным плагином для просмотра изображений lightGallery</h2>
                <p>
                    Что бы отключить плагин, то нужно убрать класс <b>lightgallery</b> и аттрибут <b>data-src</b>
                </p>
                <div class="columns-box columns-box--two-col">
                    <figure >
                        <span data-src="{{asset('img/poster-1.jpg')}}">
                            <img src="{{asset('img/poster-1.jpg')}}" alt="Описание" />
                        </span>
                        <figcaption>Описание</figcaption>
                    </figure>
                    <div class="lightgallery" data-src="{{asset('img/poster-1.jpg')}}">
                        <img src="{{asset('img/poster-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="columns-box columns-box--two-col lightgallery">
                    <figure >
                        <span data-src="{{asset('img/poster-1.jpg')}}">
                            <img src="{{asset('img/poster-1.jpg')}}" alt="Описание" />
                        </span>
                        <figcaption>Описание</figcaption>
                    </figure>
                    <div  data-src="{{asset('img/poster-1.jpg')}}">
                        <img src="{{asset('img/poster-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="doc-link">
                    <span class="doc-link__caption">
                        Название документа для скачивания или еще чего нибудь
                    </span>
                    <a target="_blank" href="#" class="doc-link__download">Скачать</a>
                </div>
                <div class="doc-link">
                    <span class="doc-link__caption">
                        Название документа для скачивания или еще чего нибудь
                    </span>
                    <a target="_blank" href="#" class="doc-link__download">Скачать</a>
                </div>
                <div class="columns-box columns-box--three-col">
                    <div class="lightgallery" data-src="{{asset('img/poster-1.jpg')}}">
                        <img src="{{asset('img/poster-1.jpg')}}" alt="">
                    </div>
                    <div class="lightgallery" data-src="{{asset('img/poster-1.jpg')}}">
                        <img src="{{asset('img/poster-1.jpg')}}" alt="">
                    </div>
                    <div class="lightgallery" data-src="{{asset('img/poster-1.jpg')}}">
                        <img src="{{asset('img/poster-1.jpg')}}" alt="">
                    </div>
                    <div class="lightgallery" data-src="{{asset('img/poster-1.jpg')}}">
                        <img src="{{asset('img/poster-1.jpg')}}" alt="">
                    </div>
                    <div class="lightgallery" data-src="{{asset('img/poster-1.jpg')}}">
                        <img src="{{asset('img/poster-1.jpg')}}" alt="">
                    </div>
                    <div class="lightgallery" data-src="{{asset('img/poster-1.jpg')}}">
                        <img src="{{asset('img/poster-1.jpg')}}" alt="">
                    </div>
                </div>
                <details>
                    <summary>Нажмите здесь, чтобы показать или скрыть подробности <span class="summary__cross"></span></summary>
                    <div class="details__body">
                        <p>Подробности о чём-то</p>
                    </div>
                </details>
                <details>
                    <summary>Нажмите здесь, чтобы показать или скрыть подробности <span class="summary__cross"></span></summary>
                    <div class="details__body">
                        <p>Подробности о чём-то</p>
                    </div>
                </details>
                <div class="ip-tab">
                    <div class="ip-tab-controller">
                        <button class="ip-tab-controller__btn active">Все меры поддержки</button>
                        <button class="ip-tab-controller__btn">Поддержка инвестора</button>
                    </div>
                    <div class="ip-tab__display active">
                        <div class="columns-box columns-box--two-col">
                            <a href="#" class="icon-link-box">
                                <span class="icon-link-box__caption">
                                    Льгота по налогу на имущество организаций
                                </span>
                                <span class="icon-link-box__icon money-icon"></span>
                            </a>
                            <a href="#" class="icon-link-box">
                                <span class="icon-link-box__caption">
                                    Льгота по налогу на имущество организаций
                                </span>
                                <span class="icon-link-box__icon money-icon"></span>
                            </a>
                            <a href="#" class="icon-link-box">
                                <span class="icon-link-box__caption">
                                    Льгота по налогу на имущество организаций
                                </span>
                                <span class="icon-link-box__icon money-icon"></span>
                            </a>
                            <a href="#" class="icon-link-box">
                                <span class="icon-link-box__caption">
                                    Льгота по налогу на имущество организаций
                                </span>
                                <span class="icon-link-box__icon money-icon"></span>
                            </a>
                            <a href="#" class="icon-link-box">
                                <span class="icon-link-box__caption">
                                    Льгота по налогу на имущество организаций
                                </span>
                                <span class="icon-link-box__icon money-icon"></span>
                            </a>
                        </div>

                    </div>
                    <div class="ip-tab__display">
                        <div class="columns-box columns-box--two-col">
                            <a href="#" class="icon-link-box">
                                <span class="icon-link-box__caption">
                                    Льгота по налогу на имущество организаций
                                </span>
                                <span class="icon-link-box__icon money-icon"></span>
                            </a>
                            <a href="#" class="icon-link-box">
                                <span class="icon-link-box__caption">
                                    Льгота по налогу на имущество организаций
                                </span>
                                <span class="icon-link-box__icon money-icon"></span>
                            </a>
                            <a href="#" class="icon-link-box">
                                <span class="icon-link-box__caption">
                                    Льгота по налогу на имущество организаций
                                </span>
                                <span class="icon-link-box__icon money-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <h2>Пример формы</h2>
                <form class="form">
                    <label class="form-elem">
                        <span class="form-elem__caption">
                            Название проекта
                        </span>
                        <input type="text" name="name1" class="form-elem__field" required="required" placeholder="Введите название проекта">
                        @error('email')
                            <span class="form-elem__error-message">{{ $message }}</span>
                        @enderror
                    </label>
                    <label class="form-elem">
                        <span class="form-elem__caption">
                            Территория реализации проекта
                        </span>
                        <textarea class="form-elem__textarea form-elem__textarea-autoheigth" name="name7"></textarea>
                        {{-- <span class="form-elem__error-message">текст ошибки</span> --}}
                    </label>
                    <button type="submit" class="btn">Отправить</button>
                </form>
                <br>
                <h2>Сотрудники ресурсоснабжающих организаций, ответственные за взаимодействие с инвесторами</h2>
                <div class="contact-card">
                    <span class="contact-card__caption">
                        Пример заголовка в карточке контактов (если будет нужен)
                    </span>
                    <ul>
                        <li><b>Ответственное лицо: </b>Агафонов Владимир Александрович — генеральный директор</li>
                        <li><b>Организация: </b> ООО «Газпром межрегионгаз Курск» АО «Газпром газораспределение Курск»</li>
                        <li><b>Контактные данные: </b>8 (4712) 73-52-00, 8 (4712) 39-99-47</li>
                    </ul>
                </div>
                <div class="contact-card">
                    <ul>
                        <li><b>Ответственное лицо: </b>Агафонов Владимир Александрович — генеральный директор</li>
                        <li><b>Организация: </b> ООО «Газпром межрегионгаз Курск» АО «Газпром газораспределение Курск»</li>
                        <li><b>Контактные данные: </b>8 (4712) 73-52-00, 8 (4712) 39-99-47</li>
                    </ul>
                </div>
            </div>
            <div class="section-with-submenu__submenu">
                <span class="submenu__caption">Разделы</span>
                <ul class="submenu">
                    <li>
                        <a href="#">Проекты ГЧП Курской области</a>
                    </li>
                    <li>
                        <a href="#">Информация о проводимых конкурсах ГЧП</a>
                    </li>
                    <li>
                        <a href="#">Практика реализация механизма ГЧП</a>
                    </li>
                    <li>
                        <a href="#">Перечень мер поддержки ГЧП</a>
                    </li>
                    <li>
                        <a href="#">Ответственные по направлению ГЧП</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <div class="inner">
        <h2>Налоговые льготы для резидентов особой экономической зоны промышленно-производственного типа «Третий полюс»</h2>
        <div class="tax-benefits-box">
            <div class="tax-benefits">
                <div class="tax-benefits__icon list-icon"></div>
                <span class="tax-benefits__icon__text">налог на прибыль</span>
                <span class="tax-benefits__icon__procent">2%</span>
                <span class="tax-benefits__icon__text">до 5 лет</span>
            </div>
            <div class="tax-benefits">
                <div class="tax-benefits__icon payment-icon"></div>
                <span class="tax-benefits__icon__text">налог на прибыль</span>
                <span class="tax-benefits__icon__procent">6%</span>
                <span class="tax-benefits__icon__text">от 6 до 10 лет</span>
            </div>
            <div class="tax-benefits">
                <div class="tax-benefits__icon procent-icon"></div>
                <span class="tax-benefits__icon__text">налог на прибыль</span>
                <span class="tax-benefits__icon__procent">15,5%</span>
                <span class="tax-benefits__icon__text">после 10 лет</span>
            </div>
            <div class="tax-benefits">
                <div class="tax-benefits__icon map-icon"></div>
                <span class="tax-benefits__icon__text">налог на землю</span>
                <span class="tax-benefits__icon__procent">0%</span>
                <span class="tax-benefits__icon__text">5 лет</span>
            </div>
            <div class="tax-benefits">
                <div class="tax-benefits__icon transport-icon"></div>
                <span class="tax-benefits__icon__text">налог на транспорт</span>
                <span class="tax-benefits__icon__procent">0%</span>
                <span class="tax-benefits__icon__text">10 лет</span>
            </div>
        </div>
    </div>
@endsection
