<section class="greeting-section">
    <div class="inner">
        <div class="governor">
            <img src="{{asset('img/governor.jpg')}}" alt="" class="governor__photo">
            <span class="governor__name">{{ $optionsa["gubernator_name"] }}</span>
            <span class="governor__position">Губернатор Курской области</span>
            <a target="_blank" href="{{ $optionsa["gubernator_message"] }}" class="btn" target="_blank">Написать губернатору</a>
            <ul class="governor__contact-list">
                <li>{{ $optionsa["gubernator_adres"] }}</li>
                <li><a href="tel:+7{{ phone_format($optionsa['gubernator_phone']) }}">{{ $optionsa['gubernator_phone'] }}</a></li>
                <li><a href="mailto:{{ $optionsa["gubernator_email"] }}">{{ $optionsa["gubernator_email"] }}</a></li>
            </ul>
        </div>
        <div class="governor-message">
            {!! $optionsa["gubernator_text"] !!}
        </div>
    </div>
</section>
