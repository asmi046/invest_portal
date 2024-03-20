<div class="cell">
    <div class="number">{{__('Этап')}} {{ $item->number }}</div>
    <div class="reaction">{{ $item->dey_to_reac }} {{__('дня (дней)')}}</div>
    <div class="comment">
        {{ _tr($item->comment, $item->comment_en) }}
    </div>
    <div class="snoska"> {{ _tr($item->snoska, $item->snoska_en) }}</div>
</div>
