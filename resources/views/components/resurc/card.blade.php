<div class="swiper-slide">
    <a target="_blank" title="{{ $item->title }}" href="{{ $item->lnk }}" class="useful-resource">
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
    </a>
</div>
