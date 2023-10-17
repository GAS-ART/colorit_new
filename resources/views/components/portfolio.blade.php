<section class="portfolio-product">
  <div class="portfolio-product__conent">
    <h2 class="portfolio-product__title">@lang('portfolio.title')</h2>
    <div class="portfolio-product__text">
      <h3 class="portfolio-product__text-title">@lang('portfolio.text_title')</h3>
      <h4 class="portfolio-product__text-text">@lang('portfolio.text')</h4>
    </div>
  </div>
  <div class="portfolio-product__img-body">
    <div class="portfolio-product__slider-product product-portfolio swiper">
      <div id="dynamic-gallery" data-path="{{$portfolioImages['gallery-image-path']}}"
        class="swiper-wrapper product-portfolio__wrapper gallery">
        @foreach ($portfolioImages as $image)
        @if(is_array($image))
        <div class="swiper-slide product-portfolio__slide gallery-item">
          <div class="product-portfolio__img">
            <img src="{{ asset($image[App::currentLocale()]['src']) }}" alt="{{__($image['alt'])}}">
            <h3 class="product-portfolio__img-title">{{__($image['title'])}}</h3>
          </div>
        </div>
        @endif
        @endforeach
      </div>
      <div class="slider-portfolio__btns">
        <div class="slider-portfolio__btn-prev">←</div>
        <div class="slider-portfolio__btn-next">→</div>
    </div>
    </div>
  </div>
  <div class="portfolio-product__show-more">
    <a class="portfolio-product__show-more-link"
      href="{{ route('portfolio', ['locale' => __('lang.current')]) }}">@lang('portfolio.show_more')
      <span>&rarr;</span></a>
  </div>
</section>