<div class="contact-card">
    <span class="contact-card__caption">
        {{ _tr($item->organ, $item->organ_en)}}
    </span>
    <ul>
        <li><b>{{ __('Ответственное лицо')}}: </b>{{ _tr($item->person, $item->person_en)}}</li>
        <li><b>{{ __('Телефон')}}: </b>
            <a href="tel:+7{{phone_format($item->phone)}}">{{ $item->phone }}</a>
            @if ($item->phone_dop)
                доб. {{ $item->phone_dop }}
            @endif
        </li>
    </ul>
</div>
