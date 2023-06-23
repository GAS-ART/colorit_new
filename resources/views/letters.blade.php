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
      <source type="image/webp" srcset="{{ asset('img/letters/es/main.jpg') }}" media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset('img/letters/es/main_mob.jpg') }}">
      @elseif(App::isLocale('ru'))
      <source type="image/webp" srcset="{{ asset('img/letters/ru/main.jpg') }}" media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset('img/letters/ru/main_mob.jpg') }}">
      @endif
      @if(App::isLocale('es'))
      <img src="{{ asset('img/letters/es/main.jpg') }}" alt="@lang('alt.home.baner_icon')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/letters/ru/main.jpg') }}" alt="@lang('alt.home.baner_icon')">
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
      @lang('letters.text');
    </div>
  </div>
</section>
<section class="letters-material">
  <div class="letters-material__container">
    <div class="letters-material__body">
      <h2 class="letters-material__title">@lang('letters.material.title')</h2>
      <p class="letters-material__text">@lang('letters.material.text')</p>
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
                <h3 class="letters-material-slide__img-title">@lang('letters.material.img.1')</h3>
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
                <h3 class="letters-material-slide__img-title">@lang('letters.material.img.2')</h3>
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
                <h3 class="letters-material-slide__img-title">@lang('letters.material.img.3')</h3>
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
                <h3 class="letters-material-slide__img-title">@lang('letters.material.img.4')</h3>
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
                <h3 class="letters-material-slide__img-title">@lang('letters.material.img.5')</h3>
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
      <p class="letters-thickness__text">@lang('letters.thickness.text')</p>
      <div class="letters-thickness__slider-body">
        <div class="letters-thickness__slider slider-letters-thickness swiper">
          <div class="slider-letters-thickness__wrapper swiper-wrapper">
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/thickness/1.svg') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/thickness/1.svg') }}" alt="">
                  @endif
                </div>
                <h3 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.1')</h3>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/thickness/2.svg') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/thickness/2.svg') }}" alt="">
                  @endif
                </div>
                <h3 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.2')</h3>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/thickness/3.svg') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/thickness/3.svg') }}" alt="">
                  @endif
                </div>
                <h3 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.3')</h3>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/thickness/4.svg') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/thickness/4.svg') }}" alt="">
                  @endif
                </div>
                <h3 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.4')</h3>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/es/thickness/5.svg') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/ru/thickness/5.svg') }}" alt="">
                  @endif
                </div>
                <h3 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.5')</h3>
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
@endsection