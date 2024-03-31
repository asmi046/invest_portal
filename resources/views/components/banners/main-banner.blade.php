<div class="header-sl-box">
    <div class="swiper header-sl">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->

            @foreach ($all_banner as $item)
                <div class="swiper-slide">
                    <x-banners.slide :item="$item"></x-banners.slide>
                </div>
            @endforeach



        </div>
    </div>
    <div class="header-sl-box__pagination">
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
