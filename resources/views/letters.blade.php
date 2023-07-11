@extends('layout')
@section('title', __('titles.letters_whithout_light.title'))
@section('description', __('titles.letters_whithout_light.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.letters_whithout_light.ogDescription'))
@section('page', 'letters')


@section('content')
<section class="main ">
  <div class="main__baner">
    <h1 class="main__baner--title service"><span>@lang('letters.title')</span></h1>
    <picture>
      @if(App::isLocale('es'))
      <source type="image/webp"
        srcset="{{ asset('img/letters/es/Letras-córporeas-de-pvc-negro-mate-para-ferias.webp') }}"
        media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset('img/letters/es/letras-córporeas-sin-iluminadas.webp') }}">
      @elseif(App::isLocale('ru'))
      <source type="image/webp" srcset="{{ asset('img/letters/ru/Объемные-буквы-из-пвх-для-выставки.webp') }}"
        media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset('img/letters/ru/Обьемные-буквы-без-света.webp') }}">
      @endif
      @if(App::isLocale('es'))
      <img src="{{ asset('img/letters/es/Letras-córporeas-de-pvc-negro-mate-para-ferias.webp') }}"
        alt="@lang('alt.home.baner_icon')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/letters/ru/Объемные-буквы-из-пвх-для-выставки.webp') }}"
        alt="@lang('alt.home.baner_icon')">
      @endif
    </picture>

    <div class="main__circle">
      <div class="main__circle--content">@lang('letters.circle')</div>
      <div class="main__circle--small"></div>
      <div class="main__circle--big"></div>
    </div>
  </div>
</section>
<section class="bread-crambs">
  <div class="bread-crambs__body">
    <a href="{{ route('home', ['locale' => __('lang.current')]) }}">@lang('crumbs.home')</a> -
    <span>@lang('crumbs.letters')</span>
  </div>
</section>
<section class="letters-text">
  <div class="letters-text__container">
    <div class="letters-text__body">
      @lang('letters.text')
    </div>
  </div>
</section>
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
<section class="letters-thickness">
  <div class="letters-thickness__container">
    <div class="letters-thickness__body">
      <h2 class="letters-thickness__title">@lang('letters.thickness.title')</h2>
      {{-- <p class="letters-thickness__text">@lang('letters.thickness.text')</p> --}}
      <div class="letters-thickness__slider-body">
        <div class="letters-thickness__slider slider-letters-thickness swiper">
          <div class="slider-letters-thickness__wrapper swiper-wrapper">
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/thickness/2.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/thickness/2.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.1')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/thickness/1.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/thickness/1.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.2')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/thickness/3.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/thickness/3.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.3')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/thickness/4.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/thickness/4.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.4')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/thickness/5.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/thickness/5.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.5')</h4>
              </div>
            </div>
          </div>
          <div class="slider-letters-thickness__btns btns-slider">
            <div class="slider-letters-thickness__btn-prev slider-btn-prev"><span>&larr;</span></div>
            <div class="slider-letters-thickness__btn-next slider-btn-next"><span>&rarr;</span></div>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="mounts">
  <div class="mounts__container">
    <div class="mounts__body">
      <h2 class="mounts__title">@lang('letters.mounts.title')</h2>
      <h3 class="mounts__text">@lang('letters.mounts.text')</h3>
      <div class="mounts__img-body">
        <div class="mounts__img">
          @if(App::isLocale('es'))
          <img src="{{ asset('img/letters/es/mounts/letras-de-pvc-20-mm-acabado-oro-con-frente-de-alumio.webp') }}"
            alt="">
          @elseif(App::isLocale('ru'))
          <img
            src="{{ asset('img/letters/ru/mounts/Золотые-буквы-объемные-толщиной-20 мм-из-пвх-с-фронтальным-золотым-алюминием.webp') }}"
            alt="">
          @endif
          <h4 class="mounts__img-title">@lang('letters.mounts.img.1')</h4>
        </div>
        <div class="mounts__img">
          @if(App::isLocale('es'))
          <img src="{{ asset('img/letters/es/mounts/letras-corporeas-con-separadores.webp') }}" alt="">
          @elseif(App::isLocale('ru'))
          <img src="{{ asset('img/letters/ru/mounts/Объемные-буквы-с-дистанцирующими-держателями.webp') }}" alt="">
          @endif
          <h4 class="mounts__img-title">@lang('letters.mounts.img.2')</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="portfolio letters-portfolio">
  <div class="portfolio__conent">
    <h2 class="portfolio__title">@lang('portfolio.title')</h2>
    <div class="portfolio__text">
      <h3 class="portfolio__text-title">@lang('portfolio.text_title')</h3>
      <h4 class="portfolio__text-text">@lang('portfolio.text')</h4>
    </div>
  </div>
  <div class="portfolio__img-body">
    <div class="portfolio__slider-product product-portfolio swiper">
      <div id="dynamic-gallery" class="swiper-wrapper product-portfolio__wrapper gallery">
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
<section class="letters-lead">
  <div class="letters-lead__container">
    <div class="letters-lead__body">
      <div class="letters-lead__img">
        <img src="{{asset('img/icons/phone.svg')}}" alt="">
      </div>
      <div class="letters-lead__content">
        <h2 class="letters-lead__title">@lang('letters.lead.title')</h2>
        <p class="letters-lead__text">@lang('letters.lead.text')</p>
      </div>
      <div class="letters-lead__action">
        <button data-popup-id="quiz" data-popup-payload="Заказ со страницы буквы без света"
          class="letters-lead__btn link-on-popup">@lang('letters.lead.btn')<span class="flare white"></span></button>
      </div>
    </div>
  </div>
</section>
@include('inc.questions')
<x-about>
  @lang('letters.about_text')
</x-about>
<x-lead>
  Заказ со страницы буквы без света
</x-lead>
@endsection