@extends('layout')
@section('title', __('titles.letters_whith_light.title'))
@section('description', __('titles.letters_whith_light.description'))
@section('ogTitle' ,__('titles.letters_whith_light.ogTitle'))
@section('ogDescription', __('titles.letters_whith_light.ogDescription'))
@section('letters_whith_light', 'active')
@section('mainPopupPayload', 'БУКВЫ СО СВЕТОМ (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('letters.whith_light.text')
</x-main-text>
<x-swiper.swiper-5 :data="$material"/>
<section class="letters-thickness whith-light">
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
  </div>
</section>
<x-two-images-section :data="$lights" />
<x-two-images-section :data="$mounts" />
<x-portfolio :$portfolioImages />
<x-lead>
  <x-slot name="title">@lang('letters.whith_light.lead.title')</x-slot>
  <x-slot name="leadInfo">БУКВЫ CO СВЕТОМ ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('letters.whith_light.about_text')
</x-about>
<x-question-lead>
  БУКВЫ СО СВЕТОМ ({{ url()->current() }})
</x-question-lead>
@endsection