<article  class="news">
    <img src="{{ Storage::url('invest-project/'.$item['img']) }}" class="news__news-img" alt="{{ $item['title'] }}" title="{{ $item['title'] }}">
    <div class="news__content">
        <h3 class="news__caption">
            <a href="{{route("invest_project_page", $item['slug'])}}">
                {{ _tr($item['title'],$item['title_en']) }}
            </a>
        </h3>
    </div>
    <div class="news__footer">
        <a href="{{route("invest_project_page", $item['slug'])}}" class="hashtag">{{__('Подробнее')}}...</a>
    </div>
</article>
