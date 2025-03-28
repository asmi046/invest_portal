@if($banner->isEmpty())
    <header id="header" style="background-image: url({{asset('img/ex-bg-header.jpg')}})">
@else
    <header id="header" style="background-image: url({{Storage::url($banner)}})">
@endif

    <div class="header__top">
        <div class="inner">
            <x-header.logo></x-header.logo>

            <x-menu.main-menu></x-menu.main-menu>

            <x-header.controls></x-header.controls>

            {{-- <button class="loupe-btn"><span></span></button>
            <button class="sversion"></button>--}}

            <x-header.search-form></x-header.search-form>
        </div>
    </div>
    <div class="header__bottom">
        <div class="inner">
            <h1 class="page-title">
                {{ $title }}
            </h1>
        </div>
    </div>
</header>
