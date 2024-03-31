<h2 class="section-title">{{ __('Основные показатели региона') }}</h2>
<div class="ip-tab indecators-tab">
    <div class="ip-tab-controller">
            @for ($i = 0; $i < count($region_parametrs_keys); $i++)
                <button @class(['ip-tab-controller__btn', 'active' => $i == 0])>0{{$i+1}} {{ _tr($region_parametrs_keys[$i], $region_parametrs_keys_en[$i]) }}</button>
            @endfor
    </div>
            @php
                $i = 0;
            @endphp
            @foreach ($region_parametrs as $key => $item)
                <div
                @class(['ip-tab__display', 'active' => $i == 0])>
                    <div class="indecators-grid">
                        @foreach ($item as $subitem)
                            <x-region-parametrs.indicator :item="$subitem"></x-region-parametrs.indicator>
                        @endforeach
                    </div>
                </div>
                @php
                    $i++;
                @endphp
            @endforeach

</div>

