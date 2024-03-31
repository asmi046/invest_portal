<div class="header-sl__item header-sl-item" style="background-image: url({{ Storage::url('slider/'.$item->img) }})">
    <div class="inner">
        <div class="header-sl-item__title">
            {!! _tr($item->title, $item->title_en) !!}
        </div>
        <div class="header-sl-item__parameters-box">
            @foreach ($item->params as $sitem)
                <div class="header-sl-item-parameters">
                    <span class="header-sl-item-parameters__value">{{ _tr($sitem->cerrecter, $sitem->cerrecter_en) }}</span>
                    <span class="header-sl-item-parameters__deskription">
                        {!! _tr($sitem->title, $sitem->title_en) !!}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</div>
