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
        <div class="swiper-slide product-portfolio__slide gallery-item">
          <div class="portfolio__img">
            @if(App::isLocale('es'))
            <img src="{{ asset('img/portfolio/es/Letras-de-pvc-10-мм-para-salon-de-belleza.webp') }}"
              alt="@lang('alt.letters.portfolio.1')">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/portfolio/ru/Буквы-вырезанные-из-пвх-10-мм-для-салона-красоты.webp') }}"
              alt="@lang('alt.letters.portfolio.1')">
            @endif
            <h3 class="portfolio__img-title">@lang('portfolio.letters.1')</h3>
          </div>
        </div>
        <div class="swiper-slide product-portfolio__slide gallery-item">
          <div class="portfolio__img">
            @if(App::isLocale('es'))
            <img src="{{ asset('img/portfolio/es/Letras-corpóreas-de-pvc-para-ferias.webp') }}"
              alt="@lang('alt.letters.portfolio.2')">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/portfolio/ru/Буквы-обьемные-из-пвх-для-выставок.webp') }}"
              alt="@lang('alt.letters.portfolio.2')">
            @endif
            <h3 class="portfolio__img-title">@lang('portfolio.letters.2')</h3>
          </div>
        </div>
        <div class="swiper-slide product-portfolio__slide gallery-item">
          <div class="portfolio__img">
            @if(App::isLocale('es'))
            <img src="{{ asset('img/portfolio/es/Letras-volumetricas-negras-para-fachada.webp') }}"
              alt="@lang('alt.letters.portfolio.3')">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/portfolio/ru/Буквы-черные-из-оргстекла-для-фасада.webp') }}"
              alt="@lang('alt.letters.portfolio.3')">
            @endif
            <h3 class="portfolio__img-title">@lang('portfolio.letters.3')</h3>
          </div>
        </div>
        <div class="swiper-slide product-portfolio__slide gallery-item">
          <div class="portfolio__img">
            @if(App::isLocale('es'))
            <img src="{{ asset('img/portfolio/es/Letras-corpóreas-30-mm-de-pvc-con-acabado-brillo.webp') }}"
              alt="@lang('alt.letters.portfolio.4')">
            @elseif(App::isLocale('ru'))
            <img
              src="{{ asset('img/portfolio/ru/Буквы-обьемные-30-мм-из-пвх-с-фронтальными-накладками-из-глянцевого-акрила.webp') }}"
              alt="@lang('alt.letters.portfolio.4')">
            @endif
            <h3 class="portfolio__img-title">@lang('portfolio.letters.4')</h3>
          </div>
        </div>
        <div class="swiper-slide product-portfolio__slide gallery-item">
          <div class="portfolio__img">
            @if(App::isLocale('es'))
            <img src="{{ asset('img/portfolio/es/Letras-corpóreas-de-pvc-con-frente-metacrilato-brillo.webp') }}"
              alt="@lang('alt.letters.portfolio.5')">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/portfolio/ru/Буквы-для-выставки-из-черного-зеркального-акрила.webp') }}"
              alt="@lang('alt.letters.portfolio.5')">
            @endif
            <h3 class="portfolio__img-title">@lang('portfolio.letters.5')</h3>
          </div>
        </div>
        <div class="swiper-slide product-portfolio__slide gallery-item">
          <div class="portfolio__img">
            @if(App::isLocale('es'))
            <img src="{{ asset('img/portfolio/es/Letras-interiores-de-metacrilato-pintados-en-color-naranja.webp') }}"
              alt="@lang('alt.letters.portfolio.6')">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/portfolio/ru/Буквы-для-внутреннего-интерьера-из-акрилата-оранжевого-цвета.webp') }}"
              alt="@lang('alt.letters.portfolio.6')">
            @endif
            <h3 class="portfolio__img-title">@lang('portfolio.letters.6')</h3>
          </div>
        </div>
        <div class="swiper-slide product-portfolio__slide gallery-item">
          <div class="portfolio__img">
            @if(App::isLocale('es'))
            <img src="{{ asset('img/portfolio/es/Letras-para-letrero-de-pvc-19mm.webp') }}"
              alt="@lang('alt.letters.portfolio.7')">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/portfolio/ru/Буквы-для-вывески-из-черного-пвх-19мм.webp') }}"
              alt="@lang('alt.letters.portfolio.7')">
            @endif
            <h3 class="portfolio__img-title">@lang('portfolio.letters.7')</h3>
          </div>
        </div>
        <div class="swiper-slide product-portfolio__slide gallery-item">
          <div class="portfolio__img">
            @if(App::isLocale('es'))
            <img src="{{ asset('img/portfolio/es/Letras-para-pared-de-metacrilato-19mm.webp') }}"
              alt="@lang('alt.letters.portfolio.8')">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/portfolio/ru/Объемные-буквы-на-стену-из-черного-пластика-19-мм.webp') }}"
              alt="@lang('alt.letters.portfolio.8')">
            @endif
            <h3 class="portfolio__img-title">@lang('portfolio.letters.8')</h3>
          </div>
        </div>
        <div class="swiper-slide product-portfolio__slide gallery-item">
          <div class="portfolio__img">
            @if(App::isLocale('es'))
            <img src="{{ asset('img/portfolio/es/Letras-volumétricas-blancas-de-pvc30mm-con-separadores.webp') }}"
              alt="@lang('alt.letters.portfolio.9')">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/portfolio/ru/Обьемные-буквы-30мм-с-креплениями.webp') }}"
              alt="@lang('alt.letters.portfolio.9')">
            @endif
            <h3 class="portfolio__img-title">@lang('portfolio.letters.9')</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>