<footer id="footer">
    <div class="footer__top">
        <div class="inner">
            <div class="footer__logo-box">
                <a href="#" class="logo">
                    <img src="{{asset('img/logo.svg')}}" alt="" class="logo__img">
                    <span class="logo__text">
                        <span class="upp">{{__('Инвестиционный портал')}}</span>
                        {{__('Курской области')}}
                    </span>
                </a>
                <img src="{{asset('img/qr-code.svg')}}" alt="" class="footer__qr">
            </div>
            <div class="footer-list-box footer-list-box-site--section">
                <span class="footer-list-box__caption">{{__('Меню')}}</span>
                <x-menu.footer-main></x-menu.footer-main>

            </div>
            <div class="footer-list-box footer-list-box--contacts">
                <span class="footer-list-box__caption">{{__('Контакты')}}</span>
                <ul class="footer-list">
                    <li>Адрес: {{ $optionsa["adress"] }}</li>
                    <li>Телефон: <a href="+7{{ phone_format($optionsa['hotline']) }}"></a>{{ $optionsa['hotline'] }} (доб. {{ $optionsa['hotline_dob'] }})</li>
                    <li>E-mail: <a href="mailto:{{ phone_format($optionsa['email']) }}"></a>{{ phone_format($optionsa['email']) }}</li>
                </ul>
                <span class="footer-list-box__caption we-in-social">{{__('Мы в соцсетях')}}</span>
                <ul class="social-list">
                    <li><a target="_blank" class="social-link social-link--vk" href="{{ phone_format($optionsa['vk_lnk']) }}">ВКонтакте</a></li>
                    <li><a target="_blank" class="social-link social-link--telegram" href="{{ phone_format($optionsa['tg_lnk']) }}">Телеграм</a></li>
                </ul>
            </div>
            <div class="footer-list-box footer-list-box--social">
                <span class="footer-list-box__caption">{{__('Навигация')}}</span>
                <ul class="footer-list">
                    <x-menu.footer-contacts></x-menu.footer-contacts>
                    <li><a target="_blank" href="{{ phone_format($optionsa['gubernator_message']) }}" class="btn btn--white-hollow">Написать губернатору</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="inner">
            <span class="copyright">© 2013 - {{ date("Y") }} {{__('Министерство экономического развития Курской области')}}</span>
            <a target="_blank" href="{{ asset('policy/Invest-portal.pdf') }}" class="privacy-polic-link">
                {{__('Политика конфиденциальности')}}
            </a>
        </div>
    </div>
</footer>

<div class="fly-btn-box">
    <div class="fly-btn-wr">
        <button class="fly-btn"><span class="fly-btn__icon message-icon"></span>Линия прямых обращений</button>
        <span class="fly-btn-caption">Линия прямых <br> обращений</span>
    </div>
    <div class="fly-btn-wr">
        <button class="fly-btn"><span class="fly-btn__icon lk-icon"></span>Личный кабинет инвестора</button>
        <span class="fly-btn-caption">Личный кабинет <br> инвестора
        </span>
    </div>
</div>
