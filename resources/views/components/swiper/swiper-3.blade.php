<section class="swiper-3" >
  <div class="swiper-3__container">
    <h2 class="swiper-3__title @if(isset($data['title_class'])){{$data['title_class']}}@endif">@lang($data['title'])</h2>
    @if (isset($data['text']))
    <p class="swiper-3__text @if(isset($data['text_class'])){{$data['text_class']}}@endif">@lang($data['text'])</p>
    @endif
    <div class="swiper-3__slider swiper" data-btn-prefix="{{$data['btn_prefix']}}"
      data-space-between="{{$data['spaceBetween']}}">
      <div class="swiper-3__wrapper swiper-wrapper">
        @foreach ($data['slides'] as $slide)
        <div class="swiper-3__slide swiper-slide">
          <div class="swiper-3__slide-body">
            <div class="swiper-3__slide-img {{$slide['height']}}">
              <img src="{{ asset($slide[App::currentLocale()]) }}" alt="@lang($slide['alt'])">
            </div>
            <h3 class="swiper-3__slide-title">@lang($slide['title'])</h3>
            @if (isset($slide['text'])) <p class="swiper-3__slide-text">@lang($slide['text'])</p> @endif
          </div>
        </div>
        @endforeach
      </div>
      <div class="slider-letters-thickness__btns btns-slider">
        <div class="{{$data['btn_prefix']}}swiper-3__btn-prev slider-btn-prev"><span>&larr;</span></div>
        <div class="{{$data['btn_prefix']}}swiper-3__btn-next slider-btn-next"><span>&rarr;</span></div>
      </div>
    </div>
  </div>
</section>