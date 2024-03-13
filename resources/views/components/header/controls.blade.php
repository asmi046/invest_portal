<div class="header__control-panel">

    <button class="header-control-btn header-control-btn--search loupe-btn"></button>

    <div class="lang-version">
        @if (App::isLocale('ru'))
            <a href="{{route('lang', 'ru')}}" class="lang-version__item">RU</a>
            <a href="{{route('lang', 'en')}}" class="lang-version__item lang-version__item--hide">EN</a>
        @else
            <a href="{{route('lang', 'en')}}" class="lang-version__item">EN</a>
            <a href="{{route('lang', 'ru')}}" class="lang-version__item lang-version__item--hide">RU</a>
        @endif

    </div>

    <button class="header-control-btn header-control-btn--poor-eyesight "></button>
    <a href="#" class="header-control-btn header-control-btn--lk"></a>
    <button class="boorger-btn header-control-btn "><span class="boorger-btn__icon"><span></span></span></button>
</div>
