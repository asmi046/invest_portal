<div class="area-card">
    <div class="area-card__img-box" data-src="{{Storage::url("portal_areas/".$item->img)}}">
        <img src="{{Storage::url("portal_areas/".$item->img)}}" alt="{{$item->name}}">
    </div>
    <div class="area-card__info">
        <h2 class="area-card__caption">{{ $item->name }}</h2>
        <div class="area-card__description">
            {!! $item->description !!}
        </div>

        <a href="{{$item->lnk}}" class="btn">Смотреть на карте</a>
    </div>
</div>
