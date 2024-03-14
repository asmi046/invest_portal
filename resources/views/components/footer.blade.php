<footer id="footer">
    <div class="footer__top">
        <div class="inner">
            <div class="footer__logo-box">
                <a href="#" class="logo">
                    <img src="{{asset('img/logo.svg')}}" alt="" class="logo__img">
                    <span class="logo__text">
                        <span class="upp">Инвестиционный портал </span>
                        Курской области
                    </span>
                </a>
                <img src="{{asset('img/qr-code.svg')}}" alt="" class="footer__qr">
            </div>
            <div class="footer-list-box footer-list-box-site--section">
                <span class="footer-list-box__caption">Навигация</span>
                <ul class="footer-list">
                    <li><a href="#">О Курской области</a></li>
                    <li><a href="#">Путь инвестора</a></li>
                    <li><a href="#">Инвестиционные площадки</a></li>
                    <li><a href="#">Инвестиционная карта</a></li>
                    <li><a href="#">Навигатор мер поддержки</a></li>
                    <li><a href="#">Экспертам АСИ</a></li>
                </ul>

            </div>
            <div class="footer-list-box footer-list-box--contacts">
                <span class="footer-list-box__caption">Контакты</span>
                <ul class="footer-list">
                    <li>Адрес: {{ $optionsa["adress"] }}</li>
                    <li>Телефон: <a href="+7{{ phone_format($optionsa['hotline']) }}"></a>{{ $optionsa['hotline'] }} (доб. {{ $optionsa['hotline_dob'] }})</li>
                    <li>E-mail: <a href="mailto:{{ phone_format($optionsa['email']) }}"></a>{{ phone_format($optionsa['email']) }}</li>
                </ul>
                <span class="footer-list-box__caption we-in-social">Мы в соцсетях</span>
                <ul class="social-list">
                    <li><a target="_blank" class="social-link social-link--vk" href="{{ phone_format($optionsa['vk_lnk']) }}">ВКонтакте</a></li>
                    <li><a target="_blank" class="social-link social-link--telegram" href="{{ phone_format($optionsa['tg_lnk']) }}">Телеграм</a></li>
                </ul>
            </div>
            <div class="footer-list-box footer-list-box--social">
                <span class="footer-list-box__caption">Навигация</span>
                <ul class="footer-list">
                    <li><a href="#">Контактная информация</a></li>
                    <li><a href="#">Линия прямых обращений</a></li>
                    <li><a href="#">Телефоны горячей линии</a></li>
                    <li><a target="_blank" href="{{ phone_format($optionsa['gubernator_message']) }}" class="btn btn--white-hollow">Написать губернатору</a></li>
                </ul>
            </div>

        </div>

    </div>
    <div class="footer__bottom">
        <div class="inner">
            <span class="copyright">© 2013 - {{ date("Y") }} Министерство экономического развития Курской области</span>
            <a target="_blank" href="{{ asset('policy/Invest-portal.pdf') }}" class="privacy-polic-link">
                Политика конфиденциальности
            </a>
        </div>
    </div>
</footer>
