<section class="greeting-section">
    <div class="inner">
        <div class="governor">

            @if ( $optionsa['gubernator_foto_show'] === "1" )
                <img src="{{ Storage::url($optionsa["gubernator_foto"])}}" alt="{{ _tr($optionsa["gubernator_dolg"], $optionsa["gubernator_dolg_en"]) }}" class="governor__photo">
            @endif

            <span class="governor__name">{{ _tr($optionsa["gubernator_name"], $optionsa["gubernator_name_en"]) }}</span>
            <span class="governor__position">{{ _tr($optionsa["gubernator_dolg"], $optionsa["gubernator_dolg_en"]) }}</span>
            <a target="_blank" href="{{ $optionsa["gubernator_message"] }}" class="btn" target="_blank">{{__('Написать губернатору')}}</a>
            <ul class="governor__contact-list">
                <li>{{ _tr($optionsa["gubernator_adres"], $optionsa["gubernator_adres_en"]) }}</li>
                <li><a href="tel:+7{{ phone_format($optionsa['gubernator_phone']) }}">{{ $optionsa['gubernator_phone'] }}</a></li>
                <li><a href="mailto:{{ $optionsa["gubernator_email"] }}">{{ $optionsa["gubernator_email"] }}</a></li>
            </ul>
        </div>
        <div class="governor-message">
            {!! _tr($optionsa["gubernator_text"], $optionsa["gubernator_text_en"]) !!}
        </div>
    </div>
</section>
