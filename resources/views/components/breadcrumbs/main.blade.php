<div class="uni_breadcrumbs">
    <div class="_container">

        <div itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{route('home')}}" >
                    <span itemprop="name">{{ __('Главная') }}</span>
                    <meta itemprop="position" content="0">
                </a>
            </span>



            @if (Request::route() && Request::route()->named('news_page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="{{ __('Все новости') }}" itemprop="item" href="{{route('news_list')}}">
                        <span itemprop="name">{{ __('Все новости') }}</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>


                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $news }}" itemprop="item">
                        <span itemprop="name">{{ $news }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (Request::route() && Request::route()->named('page'))
                @if (isset($parent))
                <span class="sep"> / </span>
                    <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a title="{{_tr($parent->title, $parent->title_en)}}" itemprop="item" href="{{route('page', $parent->slug)}}">
                            <span itemprop="name">{{_tr($parent->title, $parent->title_en)}}</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </span>
                @endif

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $page }}" itemprop="item">
                        <span itemprop="name">{{ $page }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (Request::route() && Request::route()->named('municipal_page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="{{ __('Муниципальный стандарт') }}" itemprop="item" href="{{route('municipal')}}">
                        <span itemprop="name">{{ __('Муниципальный стандарт') }}</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>


                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $ms }}" itemprop="item">
                        <span itemprop="name">{{ $ms }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (Request::route() && Request::route()->named('sovet_page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="{{ __('Все Советы') }}" itemprop="item" href="{{route('sovet')}}">
                        <span itemprop="name">{{ __('Все Советы') }}</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>


                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $sovet }}" itemprop="item">
                        <span itemprop="name">{{ $sovet }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (Request::route() && Request::route()->named('invest_project_page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="{{ __('Все проекты') }}" itemprop="item" href="{{route('invest_project')}}">
                        <span itemprop="name">{{ __('Все проекты') }}</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>


                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $invest }}" itemprop="item">
                        <span itemprop="name">{{ $invest }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (Request::route() && Request::route()->named('support_page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="{{ __('Все меры поддержки') }}" itemprop="item" href="{{route('invest_project')}}">
                        <span itemprop="name">{{ __('Все меры поддержки') }}</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>


                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $support }}" itemprop="item">
                        <span itemprop="name">{{ $support }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (isset($title))
                <span class="sep"> / </span>
                    <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                        <span title="{{ $title }}" itemprop="item">
                            <span itemprop="name">{{ __($title) }}</span>
                            <meta itemprop="position" content="1">
                        </span>
                    </span>
            @endif

         </div>
    </div>
</div>
