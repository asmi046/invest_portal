<div class="vizpanel" aria-label="Панель управления версией для слабовидящих">
    <div class="inner vizpanel__setting-panel">
        <div class="vizpanel__block">
            <div class="vizpanel__block__label">Размер шрифта: </div>
            <button class="vizpanel__block__btn vizpanel__block__btn-arrow font-vizpanel__block__btn__font fs_normal" aria-label="Нормальный размер шрифта">А</button>
            <button class="vizpanel__block__btn vizpanel__block__btn-arrow font-vizpanel__block__btn__font fs_large" aria-label="Большой размер шрифта">А</button>
            <button class="vizpanel__block__btn vizpanel__block__btn-arrow font-vizpanel__block__btn__font fs_very_larg" aria-label="Очень большой размер шрифта">А</button>
        </div>
        <div class="vizpanel__block">
            <div class="vizpanel__block__label">Цветовая тема: </div>
            <button class="vizpanel__block__btn vizpanel__block__btn-arrow white-theme" aria-label="Белая тема оформления">Ц</button>
            <button class="vizpanel__block__btn vizpanel__block__btn-arrow black-theme" aria-label="Черная тема оформления">Ц</button>
            <button class="vizpanel__block__btn vizpanel__block__btn-arrow blue-theme" aria-label="Синяя тема оформления">Ц</button>
        </div>
        <div class="vizpanel__block">
            <div class="vizpanel__block__label">Изображение: </div>
            <button class="vizpanel__block__btn switch-img switch-img_on" aria-label="Кнопка включения или отключения изображений на сайте">
                Вкл
            </button>
            <button class="vizpanel__block__btn switch-img switch-img_off" aria-label="Кнопка включения или отключения изображений на сайте">
                Выкл
            </button>
            <button class="vizpanel__block__btn switch-img switch-img__colored">Цветные</button>
            <button class="vizpanel__block__btn switch-img switch-img__monochrome">Чёрнобелые</button>
        </div>
        <div class="vizpanel__block regular-version-box">
            <button class="vizpanel__block__btn regular-version">
                Обычная версия
            </button>
        </div>
        <div class="vizpanel__block">
            <button class="vizpanel__block__btn vizpanel__block__btn--yellow show-setting-panel" aria-label="Кнопка открытия панели дополнительных настроек версии для слабовидящих">
                Настройки
            </button>
        </div>
    </div>
    <div class="inner">
        <div class="vizpanel__advanced-settings-panel vizpanel-asp">
            <h2 class="vizpanel-asp__caption">
                Настройки шрифта
            </h2>
            <div class="vizpanel-asp-item">
                 <h3 class="vizpanel-asp-item__caption">
                    Выберите тип шрифта:
                 </h3>
                 <div class="vizpanel-asp-item__panel">
                    <button class="vizpanel-asp-btn vizpanel-asp-btn--sans-serif">
                        Без засечек
                    </button>
                    <button class="vizpanel-asp-btn vizpanel-asp-btn--serif">
                        С засечками
                    </button>
                 </div>
            </div>
            <div class="vizpanel-asp-item">
                <h3 class="vizpanel-asp-item__caption">
                    Интервал между буквами (Кернинг):
                </h3>
                <div class="vizpanel-asp-item__panel">
                   <button class="vizpanel-asp-btn vizpanel-asp-btn__ls-normal">
                       Стандартный
                   </button>
                   <button class="vizpanel-asp-btn vizpanel-asp-btn__ls-large">
                       Средний
                   </button>
                   <button class="vizpanel-asp-btn vizpanel-asp-btn__ls-very-large">
                        Большой
                    </button>
                </div>
           </div>
            <h2 class="vizpanel-asp__caption">
                Выбор цветовой схемы
            </h2>
            <button class="btn-color-theme btn-color-theme--white-theme white-theme">
                Четным по белому
            </button>
            <button class="btn-color-theme btn-color-theme--black-theme black-theme">
                Белым по черному
            </button>
            <button class="btn-color-theme btn-color-theme--blue-theme blue-theme">
                Темно-синим по голубому
            </button>
            <button class="btn-color-theme btn-color-theme--brown-theme brown-theme">
                Коричневым по бежевому
            </button>
            <button class="btn-color-theme btn-color-theme--green-theme green-theme">
                Зеленым по темно-коричневому
            </button>
            <div class="vizpanel-asp__footer">
                <button class="vizpanel-big-btn vizpanel__default-settings">Вернуть стандартные настройки</button>
                <button class="vizpanel-big-btn close-vizpanel-asp">Закрыть панель</button>
            </div>
        </div>
    </div>
</div>
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
                                <a href="{{route('presentationRegion')}}">Презентация региона</a>
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
                            <a href="{{route('industrial_sites')}}">Инвестиционные площадки</a>
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
            <button class="sversion"></button>
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
