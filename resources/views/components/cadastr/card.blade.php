<div class="area_card">
    <div class="img_wrapper">
        <img src="{{Storage::url("portal_areas/".$item->img)}}" alt="{{$item->name}}">
    </div>
    <div class="info">
        <h2>{{ $item->name }}</h2>
        {!! $item->description !!}
        <a href="{{$item->lnk}}">Смотреть на карте</a>
    </div>
</div>
