<section class="portfolio">
  <div class="portfolio__conent">
    <h2 class="portfolio__title">@lang('portfolio.title')</h2>
    <div class="portfolio__text">
      <h3 class="portfolio__text-title">@lang('portfolio.text_title')</h3>
      <h4 class="portfolio__text-text">@lang('portfolio.text')</h4>
    </div>
  </div>
  <div class="portfolio__img-body">
    <div class="portfolio__slider-product product-portfolio swiper">
      <div id="dynamic-gallery" data-path="letters/portfolio" class="swiper-wrapper product-portfolio__wrapper gallery">
        @foreach ($portfolioImages as $image)
        <div class="swiper-slide product-portfolio__slide gallery-item">
          <div class="portfolio__img">
            <img src="{{ asset($image[App::currentLocale()]['src']) }}" alt="{{__($image['alt'])}}">
            <h3 class="portfolio__img-title">{{__($image['title'])}}</h3>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="portfolio__show-more">
    <a class="portfolio__show-more-link"
      href="{{ route('portfolio', ['locale' => __('lang.current')]) }}">@lang('portfolio.show_more')
      <span>&rarr;</span></a>
  </div>
</section>