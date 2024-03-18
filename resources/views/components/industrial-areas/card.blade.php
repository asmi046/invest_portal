<div class="industrial-areas__card">
    <div class="img_wrapper">
        <img src="{{ Storage::url('invest_areas/'.$item->img) }}" alt="{{ _tr($item->title, $item->title_en) }}">
    </div>
    <div class="info">
        <h2>{{ _tr($item->title, $item->title_en) }}</h2>
        <p>{{__("Управляющая компания")}}: {{ _tr($item->uk_name, $item->uk_name_en) }}</p>
        <p> {{__("Количество действующих резидентов")}} - {{ $item->rezident_count}}</p>
        <p> {{__("Свободная площадь")}} - {{ $item->free_area}}</p>
        <a href="{{ $item->btn_lnk }}">{{__("Подробнее")}}</a>
    </div>
</div>
