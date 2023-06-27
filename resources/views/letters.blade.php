@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'letters')


@section('content')
<section class="main">
  <div class="main__baner">
    <picture>
      @if(App::isLocale('es'))
      <source type="image/webp"
        srcset="{{ asset('img/letters/es/Letras-córporeas-de-pvc-negro-mate-para-ferias.webp') }}"
        media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset('img/letters/es/main_mob.jpg') }}">
      @elseif(App::isLocale('ru'))
      <source type="image/webp" srcset="{{ asset('img/letters/ru/Объемные-буквы-из-пвх-для-выставки.webp') }}"
        media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset('img/letters/ru/main_mob.jpg') }}">
      @endif
      @if(App::isLocale('es'))
      <img src="{{ asset('img/letters/es/Letras-córporeas-de-pvc-negro-mate-para-ferias.webp') }}"
        alt="@lang('alt.home.baner_icon')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/letters/ru/Объемные-буквы-из-пвх-для-выставки.webp') }}"
        alt="@lang('alt.home.baner_icon')">
      @endif
    </picture>
    <h1 class="main__baner--title"><span>@lang('letters.title')</span></h1>
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
                  <img src="{{ asset('img/letters/es/material/1.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/material/1.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-material-slide__img-title">@lang('letters.material.img.1')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-material__slide letters-material-slide">
              <div class="letters-material-slide__body">
                <div class="letters-material-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/material/2.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/material/2.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-material-slide__img-title">@lang('letters.material.img.2')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-material__slide letters-material-slide">
              <div class="letters-material-slide__body">
                <div class="letters-material-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/material/3.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/material/3.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-material-slide__img-title">@lang('letters.material.img.3')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-material__slide letters-material-slide">
              <div class="letters-material-slide__body">
                <div class="letters-material-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/material/4.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/material/4.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-material-slide__img-title">@lang('letters.material.img.4')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-material__slide letters-material-slide">
              <div class="letters-material-slide__body">
                <div class="letters-material-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/material/5.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/material/5.webp') }}" alt="">
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
    <div class="portfolio__img">
      @if(App::isLocale('es'))
      <img src="{{ asset('img/portfolio/es/Letras-de-pvc-10-mm-blancas.webp') }}"
        alt="@lang('alt.letters.portfolio.1')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/portfolio/ru/Буквы-с-вырезанные-из-пвх-пластика-10-мм.webp') }}"
        alt="@lang('alt.letters.portfolio.1')">
      @endif
      <h3 class="portfolio__img-title">@lang('portfolio.img.1')</h3>
    </div>
    <div class="portfolio__img">
      @if(App::isLocale('es'))
      <img src="{{ asset('img/portfolio/es/Letras-corporeas-de-metacrilato.webp') }}"
        alt="@lang('alt.letters.portfolio.2')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/portfolio/ru/Буквы-обьемные-20-мм-из-пвх-покрашеннные.webp') }}"
        alt="@lang('alt.letters.portfolio.2')">
      @endif
      <h3 class="portfolio__img-title">@lang('portfolio.img.2')</h3>
    </div>
    <div class="portfolio__img">
      @if(App::isLocale('es'))
      <img src="{{ asset('img/portfolio/es/letras-de-pvc-19-mm-sin-uluminacion.webp') }}"
        alt="@lang('alt.letters.portfolio.3')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/portfolio/ru/Буквы-для-салона-красоты-из-пвх-19-мм.webp') }}"
        alt="@lang('alt.letters.portfolio.3')">
      @endif
      <h3 class="portfolio__img-title">@lang('portfolio.img.3')</h3>
    </div>
    <div class="portfolio__img">
      @if(App::isLocale('es'))
      <img src="{{ asset('img/portfolio/es/Letras-corporeas-30-mm-de-pvc-con-acabado-brillo.webp') }}"
        alt="@lang('alt.letters.portfolio.4')">
      @elseif(App::isLocale('ru'))
      <img
        src="{{ asset('img/portfolio/ru/Буквы-обьемные-30-мм-из-пвх-с-фронтальными-накладками-из-глянцевого-акрила.webp') }}"
        alt="@lang('alt.letters.portfolio.4')">
      @endif
      <h3 class="portfolio__img-title">@lang('portfolio.img.4')</h3>
    </div>
    <div class="portfolio__img">
      @if(App::isLocale('es'))
      <img src="{{ asset('img/portfolio/es/Letras-de-pvc-con-frente-brillo.webp') }}"
        alt="@lang('alt.letters.portfolio.5')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/portfolio/ru/Буквы-пвх-с-основой-из-акрилата.webp') }}"
        alt="@lang('alt.letters.portfolio.5')">
      @endif
      <h3 class="portfolio__img-title">@lang('portfolio.img.5')</h3>
    </div>
    <div class="portfolio__img">
      @if(App::isLocale('es'))
      <img src="{{ asset('img/portfolio/es/Letras-de-pvc-con-frente-de-metacrilato.webp') }}"
        alt="@lang('alt.letters.portfolio.6')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/portfolio/ru/Объемные-буквы-30-мм-из-пвх-с-глянцевыми-накладками-из-акрилата.webp') }}"
        alt="@lang('alt.letters.portfolio.6')">
      @endif
      <h3 class="portfolio__img-title">@lang('portfolio.img.6')</h3>
    </div>
    <div class="portfolio__img">
      @if(App::isLocale('es'))
      <img src="{{ asset('img/portfolio/es/Letras-corporeas-19-mm-de-metacrilato-negro.webp') }}"
        alt="@lang('alt.letters.portfolio.7')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/portfolio/ru/Объемные-буквы-из-пвх-19-мм-черного-цвета.webp') }}"
        alt="@lang('alt.letters.portfolio.7')">
      @endif
      <h3 class="portfolio__img-title">@lang('portfolio.img.7')</h3>
    </div>
    <div class="portfolio__img">
      @if(App::isLocale('es'))
      <img src="{{ asset('img/portfolio/es/Letras-de-pvc-10-mm-negras.webp') }}" alt="@lang('alt.letters.portfolio.8')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/portfolio/ru/Обьемные-буквы-10-мм-из-материала-пвх.webp') }}"
        alt="@lang('alt.letters.portfolio.8')">
      @endif
      <h3 class="portfolio__img-title">@lang('portfolio.img.8')</h3>
    </div>
    <div class="portfolio__img">
      @if(App::isLocale('es'))
      <img src="{{ asset('img/portfolio/es/Letras-corporeas-30-mm-de-grosor-PVC.webp') }}"
        alt="@lang('alt.letters.portfolio.9')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/portfolio/ru/Объемные-буквы-30-мм-из-белого-пвх.webp') }}"
        alt="@lang('alt.letters.portfolio.9')">
      @endif
      <h3 class="portfolio__img-title">@lang('portfolio.img.8')</h3>
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
        <button data-popup-id="main" class="letters-lead__btn link-on-popup">@lang('letters.lead.btn')<span
            class="flare white"></span></button>
      </div>
    </div>
  </div>
</section>
@include('inc.questions')
<x-about>
  @lang('letters.about_text')
</x-about>
@include('inc.lead')
@endsection