<header id="header" class="header-inner" style="background-image: url({{asset('img/bg-header-inner.jpg')}})">
    <div class="header-video-bg-box">
    </div>
    <div class="header__top">
        <div class="inner">
            <a href="{{route('home')}}" class="logo"></a>
            <nav class="main-menu-container">
                <button class="close-menu-btn close-cross"></button>
                <ul class="main-menu">
                    <li class="main-menu__parent-item">
                        <div class="main-menu__first-level">
                            <a href="#">О Курской области</a>
                            <button class="btn-show-submenu"></button>
                        </div>
                        <ul>
                            <li>
                                <a href="#">Презентация региона</a>
                            </li>
                            <li>
                                <a href="{{route('socioEconomicDevelopment')}}">Социально-экономическое развитие</a>
                            </li>
                            <li>
                                <a href="{{route('about_gchp')}}">О ГЧП в регионе</a>
                            </li>
                            <li>
                                <a href="#">Развитие экспорта</a>
                            </li>
                            <li>
                                <a href="#">Стандарт развития конкуренции</a>
                            </li>
                            <li>
                                <a href="#">Совет по улучшению инвест климата</a>
                            </li>
                            <li>
                                <a href="#">План создания объектов инфраструктуры</a>
                            </li>
                            <li>
                                <a href="#">Витрина инвестиционных проектов</a>
                            </li>
                            <li>
                                <a href="#">Муниципальный инвестиционный стандарт Курской области</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-menu__parent-item">
                        <div class="main-menu__first-level">
                            <a href="#">Путь инвестора</a>
                            <button class="btn-show-submenu"></button>
                        </div>
                        <ul>
                            <li>
                                <a href="#"> Регламент «одного окна» для инвестора (подать заявку)</a>
                            </li>
                            <li>
                                <a href="#"> Подобрать земельный участок</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-menu__parent-item">
                        <div class="main-menu__first-level">
                            <a href="#">Инвестиционные площадки</a>
                            <button class="btn-show-submenu"></button>
                        </div>
                        <ul>
                            <li>
                                <a href="#">ОЭЗ «Третий Полюс»</a>
                            </li>
                            <li>
                                <a href="#">Индустриальные парки</a>
                            </li>
                            <li>
                                <a href="#">Реестр земельных участков</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('news_list')}}">Новости</a>
                    </li>
                    <li>
                        <a href="#">Навигатор мер поддержки</a>
                    </li>
                    <li class="main-menu__parent-item">
                        <div class="main-menu__first-level">
                            <a href="#">Экспертам АСИ</a>
                            <button class="btn-show-submenu"></button>
                        </div>
                        <ul>
                            <li>
                                <a href="#">Инвестиционный стандрат Курской области 2.0</a>
                            </li>
                            <li>
                                <a href="#">Социально-экономическая стратегия развития Курской области</a>
                            </li>
                            <li>
                                <a href="#">Меры господдержки</a>
                            </li>
                            <li>
                                <a href="#">Линия прямых обращений</a>
                            </li>
                            <li>
                                <a href="#">Регламент «одного окна» для инвестора</a>
                            </li>
                            <li>
                                <a href="#">Реестр инвестиционных проектов</a>
                            </li>
                            <li>
                                <a href="#">План создания объектов инфраструктуры</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="lang-version">
                <a href="#" class="lang-version__item">RU</a>
                <a href="#" class="lang-version__item lang-version__item--hide">EN</a>
            </div>
            <button class="loupe-btn"><span></span></button>
            <button class="boorger-btn"><span class="boorger-btn__icon"><span></span></span></button>
            <form class="search-form global-search-form">
                <input type="search" class="search-field">
                <button type="submit" class="search-form__loupe-btn"></button>

            </form>
        </div>
    </div>
    <div class="header__bottom header-bottom">
        <div class="inner">
            <div class="header__page-info">
                <h1 class="page-title">
                   {{$pageTitle}}
                </h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}">Главная</a></li>
                    {{-- <li><a href="{{route('news_list')}}">Новости портала</a></li> --}}
                    <li>
                        <span>{{$pageTitle}}</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>
