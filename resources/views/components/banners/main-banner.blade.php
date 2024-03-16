<div class="header-sl-box">
    <div class="swiper header-sl">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="header-sl__item header-sl-item" style="background-image: url({{asset('img/main-sl-1.jpg')}})">
                    <div class="inner">
                        <div class="header-sl-item__title">
                            {!! __('Курская область <br> это сельское хозяйство') !!}
                        </div>
                        <div class="header-sl-item__parameters-box">
                            <div class="header-sl-item-parameters">
                                <span class="header-sl-item-parameters__value">5</span>
                                <span class="header-sl-item-parameters__deskription">
                                    {!! __('млн. тонн сахарной свеклы') !!}
                                </span>
                            </div>
                            <div class="header-sl-item-parameters">
                                <span class="header-sl-item-parameters__value">427,6</span>
                                <span class="header-sl-item-parameters__deskription">
                                    {!! __('тыс. тонн молока') !!}
                                </span>
                            </div>
                            <div class="header-sl-item-parameters">
                                <span class="header-sl-item-parameters__value">163,3</span>
                                <span class="header-sl-item-parameters__deskription">
                                    {!! __('млн. штук яиц') !!}
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
                            {!! __('Курская область <br> это строительство') !!}
                        </div>
                        <div class="header-sl-item__parameters-box">
                            <div class="header-sl-item-parameters">
                                <span class="header-sl-item-parameters__value">106,3 %</span>
                                <span class="header-sl-item-parameters__deskription">
                                    {{ __('индекс физического объема работ, выполненных по виду деятельности «Строительство»') }}
                                </span>
                            </div>
                            <div class="header-sl-item-parameters">
                                <span class="header-sl-item-parameters__value">517,1</span>
                                <span class="header-sl-item-parameters__deskription">
                                    {{ __('тыс. м2 жилых домов введено в эксплуатацию') }}
                                </span>
                            </div>
                            <div class="header-sl-item-parameters">
                                <span class="header-sl-item-parameters__value">49,9</span>
                                <span class="header-sl-item-parameters__deskription">

                                    {{ __('км. газовых труб введено в эксплуатацию') }}
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
