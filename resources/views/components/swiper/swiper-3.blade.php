<section class="swiper-3">
  <div class="swiper-3__container">
    <h2 class="swiper-3__title">@lang($swiper3['title'])</h2>
    @if ($swiper3['text'])
    <p class="swiper-3__text">@lang($swiper3['text'])</p>
    @endif
    <div class="swiper3__slider swiper" data-space-between="{{$swiper3['spaceBetween']}}">
      <div class="swiper3__wrapper swiper-wrapper">
        @foreach ($swiper3['slides'] as $slide)
        <div class="swiper3__slide swiper-slide">
          <div class="swiper3__slide-body">
            <div class="swiper3__slide-img">
              <img src="{{ asset($slide[App::currentLocale()]) }}" @if($slide['alt']) alt="@lang($slide['alt'])" @endif>
              {{-- @if(App::isLocale('es'))
              <img src="{{ asset('img/signboards/whith_light/es/variants/1.webp') }}" alt="">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/signboards/whith_light/ru/variants/1.webp') }}" alt="">
              @endif --}}
            </div>
            <h3 class="swiper3__slide-title">@lang($slide['title'])</h3>
          </div>
        </div>
        @endforeach
      </div>
      <div class="slider-letters-thickness__btns btns-slider">
        <div class="swiper3__btn-prev slider-btn-prev"><span>&larr;</span></div>
        <div class="swiper3__btn-next slider-btn-next"><span>&rarr;</span></div>
      </div>
    </div>
  </div>
</section>