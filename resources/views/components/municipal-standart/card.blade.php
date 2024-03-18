<a href="{{ route('municipal_page', $item->slug) }}" class="ms_card">
    <span class="ms_card__name">
        {{ $item->title }}
    </span>
    <img src="{{ Storage::url("munitipal_standarts/".$item->gerb) }}" alt="{{ $item->title }}">
</a>
