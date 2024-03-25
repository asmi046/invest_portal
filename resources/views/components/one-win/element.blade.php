<div class="one-win-step">
    <div class="one-win-step__number">{{__('Этап')}} {{ $item->number }}</div>
    <div class="one-win-step__reaction">{{ $item->dey_to_reac }} {{__('дня (дней)')}}</div>
    <div class="one-win-step__comment">
        {{ _tr($item->comment, $item->comment_en) }}
    </div>
    <div class="one-win-step__note"> {{ _tr($item->snoska, $item->snoska_en) }}</div>
</div>
