<article  class="news">
    <img src="{{ $item['img'] }}" class="news__news-img" alt="{{ $item['title'] }}" title="{{ $item['title'] }}">
    <div class="news__content">
        <span class="news__date">{{ date("d.m.Y", strtotime($item['public_time'])) }}</span>
        <h3 class="news__caption">
            <a href="{{route("news_page", $item['slug'])}}">
                {{ $item['title'] }}
            </a>
        </h3>
    </div>
    <div class="news__footer">
        <a href="{{route("news_page", $item['slug'])}}" class="hashtag">Подробнее...</a>
    </div>
</article>
