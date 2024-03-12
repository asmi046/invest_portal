<section class="greeting-section">
    <div class="inner">
        <div class="governor">
            <img src="{{asset('img/governor.jpg')}}" alt="" class="governor__photo">
            <span class="governor__name">{{ $options["gubernator_name"] }}</span>
            <span class="governor__position">Губернатор Курской области</span>
            <a target="_blank" href="{{ $options["gubernator_message"] }}" class="btn" target="_blank">Написать губернатору</a>
            <ul class="governor__contact-list">
                <li>{{ $options["gubernator_adres"] }}</li>
                <li><a href="tel:+7{{ phone_format($options['gubernator_phone']) }}">{{ $options['gubernator_phone'] }}</a></li>
                <li><a href="mailto:{{ $options["gubernator_email"] }}">{{ $options["gubernator_email"] }}</a></li>
            </ul>
        </div>
        <div class="governor-message">
            {!! $options["gubernator_text"] !!}
        </div>
    </div>
</section>
