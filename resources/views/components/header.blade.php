<x-vizpanel.main></x-vizpanel.main>

<x-menu.side-menu></x-menu.side-menu>

<header id="header" style="background-image: url({{asset('img/bg-header-inner.jpg')}})">
    <div class="header__top">
        <div class="inner">
            <x-header.logo></x-header.logo>

            <x-menu.main-menu></x-menu.main-menu>

            <x-header.controls></x-header.controls>

            {{-- <button class="loupe-btn"><span></span></button>
            <button class="sversion"></button>--}}

            <x-header.search-form></x-header.search-form>
        </div>
    </div>
    <div class="header-sl-box">
        <div class="swiper header-sl">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="header-sl__item header-sl-item" style="background-image: url({{asset('img/main-sl-1.jpg')}})">
                        <div class="inner">
                            <div class="header-sl-item__title">
                                Курская область <br> это сельское хозяйство
                            </div>
                            <div class="header-sl-item__parameters-box">
                                <div class="header-sl-item-parameters">
                                    <span class="header-sl-item-parameters__value">5</span>
                                    <span class="header-sl-item-parameters__deskription">
                                        млн. тонн сахарной свеклы
                                    </span>
                                </div>
                                <div class="header-sl-item-parameters">
                                    <span class="header-sl-item-parameters__value">427,6</span>
                                    <span class="header-sl-item-parameters__deskription">
                                        тыс. тонн молока
                                    </span>
                                </div>
                                <div class="header-sl-item-parameters">
                                    <span class="header-sl-item-parameters__value">163,3</span>
                                    <span class="header-sl-item-parameters__deskription">
                                        млн. штук яиц
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="header-sl__item header-sl-item" style="background-image: url({{asset('img/main-sl-2.jpg')}})">
                        <div class="inner">
                            <div class="header-sl-item__title">
                                Курская область <br> это строительство
                            </div>
                            <div class="header-sl-item__parameters-box">
                                <div class="header-sl-item-parameters">
                                    <span class="header-sl-item-parameters__value">106,3 %</span>
                                    <span class="header-sl-item-parameters__deskription">
                                        индекс физического объема работ, выполненных по виду деятельности «Строительство»
                                    </span>
                                </div>
                                <div class="header-sl-item-parameters">
                                    <span class="header-sl-item-parameters__value">517,1</span>
                                    <span class="header-sl-item-parameters__deskription">
                                        тыс. м2 жилых домов введено в эксплуатацию
                                    </span>
                                </div>
                                <div class="header-sl-item-parameters">
                                    <span class="header-sl-item-parameters__value">49,9</span>
                                    <span class="header-sl-item-parameters__deskription">
                                        км. газовых труб введено в эксплуатацию
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sl-box__pagination">
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>




</header>
