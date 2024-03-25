<div class="area-card">
    <div class="area-card__img-box" data-src="{{Storage::url("portal_areas/".$item->img)}}">
        <img src="{{Storage::url("portal_areas/".$item->img)}}" alt="{{$item->name}}">
    </div>
    <div class="area-card__info">
        <h2 class="area-card__caption">{{ _tr($item->name, $item->name_en) }}</h2>
        <div class="area-card__description">
            {!! _tr($item->description, $item->description_en) !!}
        </div>

        <a href="{{$item->lnk}}" class="btn">{{__('Смотреть на карте')}}</a>
    </div>
</div>
