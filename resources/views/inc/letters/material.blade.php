<section class="letters-material">
  <div class="letters-material__container">
    <div class="letters-material__body">
      <h2 class="letters-material__title">@lang('letters.material.title')</h2>
      <h3 class="letters-material__text">@lang('letters.material.text_title')</h3>
      <span>@lang('letters.material.text_text')</span>
      <div class="letters-material__slider-body">
        <div class="letters-material__slider slider-letters-material swiper">
          <div class="slider-letters-material__wrapper swiper-wrapper">
            <div class="swiper-slide slider-letters-material__slide letters-material-slide">
              <div class="letters-material-slide__body">
                <div class="letters-material-slide__img">
                  @if(App::isLocale('es'))
                  <img
                    src="{{ asset('img/letters/es/material/Fabricacion-letras-corpóreas-de-PVC-en-Barcelona.webp') }}"
                    alt="@lang('alt.letters.material.1')">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/material/Изготовление-обьемных-букв-из-PVC-в-Барселоне.webp') }}"
                    alt="@lang('alt.letters.material.1')">
                  @endif
                </div>
                <h4 class="letters-material-slide__img-title">@lang('letters.material.img.1')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-material__slide letters-material-slide">
              <div class="letters-material-slide__body">
                <div class="letters-material-slide__img">
                  @if(App::isLocale('es'))
                  <img
                    src="{{ asset('img/letters/es/material/Fabricacion-letras-corpóreas-de-madera-en-Barcelona.webp') }}"
                    alt="@lang('alt.letters.material.2')">
                  @elseif(App::isLocale('ru'))
                  <img
                    src="{{ asset('img/letters/ru/material/Изготовление-обьемных-букв-из-дерева-в-Барселоне.webp') }}"
                    alt="@lang('alt.letters.material.2')">
                  @endif
                </div>
                <h4 class="letters-material-slide__img-title">@lang('letters.material.img.2')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-material__slide letters-material-slide">
              <div class="letters-material-slide__body">
                <div class="letters-material-slide__img">
                  @if(App::isLocale('es'))
                  <img
                    src="{{ asset('img/letters/es/material/Fabricacion-letras-corpóreas-de-metacrilato-en-Barcelona.webp') }}"
                    alt="@lang('alt.letters.material.3')">
                  @elseif(App::isLocale('ru'))
                  <img
                    src="{{ asset('img/letters/ru/material/Изготовление-обьемных-букв-из-оргстекла-в-Барселоне.webp') }}"
                    alt="@lang('alt.letters.material.3')">
                  @endif
                </div>
                <h4 class="letters-material-slide__img-title">@lang('letters.material.img.3')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-material__slide letters-material-slide">
              <div class="letters-material-slide__body">
                <div class="letters-material-slide__img">
                  @if(App::isLocale('es'))
                  <img
                    src="{{ asset('img/letters/es/material/Fabricacion-letras-corpóreas-de-dibond-en-Barcelona.webp') }}"
                    alt="@lang('alt.letters.material.4')">
                  @elseif(App::isLocale('ru'))
                  <img
                    src="{{ asset('img/letters/ru/material/Изготовление-обьемных-букв-из-композита-в-Барселоне.webp') }}"
                    alt="@lang('alt.letters.material.4')">
                  @endif
                </div>
                <h4 class="letters-material-slide__img-title">@lang('letters.material.img.4')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-material__slide letters-material-slide">
              <div class="letters-material-slide__body">
                <div class="letters-material-slide__img">
                  @if(App::isLocale('es'))
                  <img
                    src="{{ asset('img/letters/es/material/Fabricacion-letras-corpóreas-de-acero-en-Barcelona.webp') }}"
                    alt="@lang('alt.letters.material.5')">
                  @elseif(App::isLocale('ru'))
                  <img
                    src="{{ asset('img/letters/ru/material/Изготовление-обьемных-букв-из-металла-в-Барселоне.webp') }}"
                    alt="@lang('alt.letters.material.5')">
                  @endif
                </div>
                <h4 class="letters-material-slide__img-title">@lang('letters.material.img.5')</h4>
              </div>
            </div>
          </div>
          <div class="slider-letters-material__btns btns-slider">
            <div class="slider-letters-material__btn-prev slider-btn-prev"><span>&larr;</span></div>
            <div class="slider-letters-material__btn-next slider-btn-next"><span>&rarr;</span></div>
          </div>
        </div>
      </div>
    </div>
</section>