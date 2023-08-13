<section class="swiper-4">
  <div class="swiper-4__container">
    <h2 class="swiper-4__title">@lang($swiper4['title'])</h2>
    @if ($swiper4['text'])
    <p class="swiper-4__text">@lang($swiper4['text'])</p>
    @endif
    <div class="swiper-4__slider swiper" data-btn-prefix="{{$swiper4['btn_prefix']}}">
      <div class="swiper-4__wrapper swiper-wrapper">
        @foreach ($swiper4['slides'] as $slide)
        <div class="swiper-4__slide swiper-slide">
          <div class="swiper-4__slide-body">
            <div class="swiper-4__slide-img">
              <img src="{{ asset($slide[App::currentLocale()]) }}" alt="@lang($slide['alt'])">
            </div>
            <h3 class="swiper-4__slide-title">@lang($slide['title'])</h3>
          </div>
        </div>
        @endforeach
      </div>
      <div class="slider-letters-thickness__btns btns-slider">
        <div class="{{$swiper4['btn_prefix']}}swiper-4__btn-prev slider-btn-prev"><span>&larr;</span></div>
        <div class="{{$swiper4['btn_prefix']}}swiper-4__btn-next slider-btn-next"><span>&rarr;</span></div>
      </div>
    </div>
  </div>
</section>