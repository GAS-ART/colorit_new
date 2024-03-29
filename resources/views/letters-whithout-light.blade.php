@extends('layout')
@section('title', __('titles.letters_whithout_light.title'))
@section('description', __('titles.letters_whithout_light.description'))
@section('ogTitle' ,__('titles.letters_whithout_light.ogTitle'))
@section('ogDescription', __('titles.letters_whithout_light.ogDescription'))
@section('letters_whithout_light', 'active')
@section('mainPopupPayload', 'БУКВЫ БЕЗ СВЕТА (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('letters.text')
</x-main-text>
<x-swiper.swiper-5 :data="$material"/>
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
                  <img src="{{ asset('img/letters/without_light/es/thickness/2.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/without_light/ru/thickness/2.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.1')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/without_light/es/thickness/1.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/without_light/ru/thickness/1.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.2')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/without_light/es/thickness/3.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/without_light/ru/thickness/3.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.3')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/without_light/es/thickness/4.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/without_light/ru/thickness/4.webp') }}" alt="">
                  @endif
                </div>
                <h4 class="letters-thickness-slide__img-title">@lang('letters.thickness.img.4')</h4>
              </div>
            </div>
            <div class="swiper-slide slider-letters-thickness__slide letters-thickness-slide">
              <div class="letters-thickness-slide__body">
                <div class="letters-thickness-slide__img">
                  @if(App::isLocale('es'))
                  <img src="{{ asset('img/letters/without_light/es/thickness/5.webp') }}" alt="">
                  @elseif(App::isLocale('ru'))
                  <img src="{{ asset('img/letters/without_light/ru/thickness/5.webp') }}" alt="">
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
  </div>
</section>
<x-two-images-section :data="$mounts" />
<x-portfolio :$portfolioImages />
<x-lead>
  <x-slot name="title">@lang('letters.lead.title')</x-slot>
  <x-slot name="leadInfo">БУКВЫ БЕЗ СВЕТА ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('letters.about_text')
</x-about>
<x-question-lead>
  БУКВЫ БЕЗ СВЕТА ({{ url()->current() }})
</x-question-lead>
@endsection