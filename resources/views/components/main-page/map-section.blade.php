<section class="invest-map-link-section">
    <div class="inner">
        <div class="invest-map-link__left-col">
            <h2 class="section-title">
                {{ __('Инвестиционная карта региона') }}
            </h2>
            <p>
                {{ __('Наглядно представить экономические возможности региона помогает интерактивная инвестиционная карта Курской области') }}
            </p>
            <a target="_blank" href="{{ $optionsa['invest_map_lnk'] }}" class="btn btn--white-hollow">{{ __('Открыть карту') }}</a>
        </div>
        <div class="invest-map-link__left-right">
            <img src="{{asset('img/region-map.jpg')}}" aria-hidden="true" alt="" class="invest-map-link__map">
        </div>
    </div>
</section>
