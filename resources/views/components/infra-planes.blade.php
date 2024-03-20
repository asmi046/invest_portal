<div class="ip-tab">
    <div class="ip-tab-controller">
        @php
            $i = 0;
        @endphp
        @foreach ($planes as $key => $item)
            <button  @class(['ip-tab-controller__btn', 'active' => $i == 0]) >{{ $key }} {{__('год')}}</button>
            @php
                $i++;
            @endphp
        @endforeach
    </div>


    @php
        $i = 0;
    @endphp
    @foreach ($planes as $key => $item)
        <div @class(['ip-tab__display', 'active' => $i == 0])>
            <div class="columns-box columns-box--two-col">

                @foreach ($item as $subitem)
                    <x-widget-file
                    :lnk="Storage::url('ifrastr_planes/'.$subitem['file'])"
                    :title="_tr($subitem['title'], isset($subitem['title_en'])?$subitem['title_en']:null)"
                    ></x-widget-file>


                @endforeach
            </div>
        </div>

        @php
            $i++;
        @endphp
    @endforeach
</div>
