<div class="indecators">

    <span @class([
            'indecators__arrow',
            'indecators__arrow--green' => $item->direction,
            'indecators__arrow--down' => !$item->direction
        ])> </span>
    <div class="indecators__indicator">
        {{ _tr($item->parametr, $item->parametr_en) }}
    </div>
    <span class="indecators__period">{{ _tr($item->data_param,$item->data_param_en) }}</span>
    <span class="indecators__field-of-activity">{{ _tr($item->parametr_name,$item->parametr_name_en) }}</span>
</div>
