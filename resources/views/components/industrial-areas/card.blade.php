<div class="industrial-area">
    <div class="industrial-area__img-box" data-src="{{ Storage::url($item->img) }}">
        <img src="{{ Storage::url($item->img) }}" alt="{{ _tr($item->title, $item->title_en) }}">
    </div>

    <div class="industrial-area__info-box">
        <span class="industrial-area__caption">{{ _tr($item->title, $item->title_en) }}</span>
        <ul class="indastrial-area__parameters">
            <li><b>{{__("Управляющая компания")}}:</b> {{ _tr($item->uk_name, $item->uk_name_en) }}</li>
            <li><b>{{__("Количество действующих резидентов")}}:</b> {{ $item->rezident_count}}</li>
            <li><b>{{__("Свободная площадь")}}:</b> {{ $item->free_area}}</li>
        </ul>
        <a target="_blank" href="{{ $item->btn_lnk }}" class="btn">{{__("Подробнее")}}</a>
    </div>
</div>
