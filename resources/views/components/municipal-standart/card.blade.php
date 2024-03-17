<a href="{{ route('municipal_page', $item->slug) }}" class="ms_card">
    <img src="{{ Storage::url("munitipal_standarts/".$item->gerb) }}" alt="{{ $item->title }}">
    <h2>{{ $item->title }}</h2>
</a>
