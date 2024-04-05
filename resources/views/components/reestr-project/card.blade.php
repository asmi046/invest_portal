<div class="reestr-project-card">
    <span class="reestr-project-card__caption">{{ _tr($item->title, $item->title_en) }}</span>
    <ul>
        @if ($item->location)
            <li>{{ __('Место реализации') }}: <strong>{{ __($item->location) }}</strong></li>
        @endif
        <li>{{ __('Период реализации проекта') }}: <strong>{{ _tr($item->period, $item->period_en) }}</strong></li>
        <li>{{ __('Стоимость проекта') }} ({{ __('млн. ₽') }}): <strong>{{ $item->price }}</strong></li>
        @if ($item->work_places)
            <li>{{ __('Количество новых рабочих мест') }}: <strong>{{ $item->work_places }}</strong></li>
        @endif
        <li>{{ __('Статус') }}: <strong>{{ $item->state }}</strong></li>
        <li>{{ __('Инвестор') }}: <strong>{{ _tr($item->investor, $item->investor_en) }}</strong></li>
    </ul>
    <a class="btn" href="{{ route('reestr_project_page', $item->slug) }}">Подробнее</a>
</div>
