<section class="swiper-5">
  <div class="swiper-5__container">
    <div class="swiper-5__body">
      <h2 class="swiper-5__title">@lang($data['title'])</h2>
      <h3 class="swiper-5__text">@lang($data['text'])</h3>
      <div class="swiper-5__slider-body">
        <div class="swiper-5__slider slider-swiper-5 swiper" data-btn-prefix="{{$data['btn_prefix']}}">
          <div class="slider-swiper-5__wrapper swiper-wrapper">
            @foreach ($data['slides'] as $slide)
            <div class="swiper-slide slider-swiper-5__slide swiper-5-slide">
              <div class="swiper-5-slide__body">
                <div class="swiper-5-slide__img">
                  <img src="{{ asset($slide[App::currentLocale()]) }}" alt="@lang($slide['alt'])">
                </div>
                <h3 class="swiper-5-slide__img-title">@lang($slide['title'])</h3>
              </div>
            </div>
            @endforeach
          </div>
          <div class="slider-swiper-5__btns btns-slider">
            <div class="{{$data['btn_prefix']}}slider-swiper-5__btn-prev slider-btn-prev"><span>&larr;</span></div>
            <div class="{{$data['btn_prefix']}}slider-swiper-5__btn-next slider-btn-next"><span>&rarr;</span></div>
          </div>
        </div>
      </div>
    </div>
</section>