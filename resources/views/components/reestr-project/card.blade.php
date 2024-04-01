<div class="reestr_project_card">
    <h2>{{ _tr($item->title, $item->title_en) }}</h2>
    @if ($item->location)
        <p>{{ __('Место реализации') }}: {{ __($item->location) }}</p>
    @endif

    <p>{{ __('Период реализации проекта') }}: <strong>{{ _tr($item->period, $item->period_en) }}</strong></p>
    <p>{{ __('Стоимость проекта') }} ({{ __('млн. ₽') }}): <strong>{{ $item->price }}</strong></p>

    @if ($item->work_places)
        <p>{{ __('Количество новых рабочих мест') }}: <strong>{{ $item->work_places }}</strong></p>
    @endif

    <p>{{ __('Статус') }}: <strong>{{ $item->state }}</strong></p>
    <p>{{ __('Инвестор') }}: <strong>{{ _tr($item->investor, $item->investor_en) }}</strong></p>

    <a class="btn" href="{{ route('reestr_project_page', $item->slug) }}">Подробнее</a>
</div>
