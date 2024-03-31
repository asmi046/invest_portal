<div class="column-box column-box--two-col mt3 mb3">
    <x-inform-card title="Заключено соглашений" :value="$optionsa['gcp_sogl_count']" icon="check-file"></x-inform-card>
    <x-inform-card title="Общий объем инвестиций по заключенным соглашениям (млн. р.)" :value="$optionsa['gcp_sogl_pay']" icon="rub"></x-inform-card>
</div>

@if ($showbtn)
<a href="{{ $optionsa['kabinet_lnk'] }}" class="btn ">{{__('Заявка на услуги ГЧП')}}</a>
@endif

