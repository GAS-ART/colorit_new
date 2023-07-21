@extends('layout')
@section('title', __('titles.letters_whithout_light.title'))
@section('description', __('titles.letters_whithout_light.description'))
@section('ogTitle' ,__('titles.letters_whithout_light.ogTitle'))
@section('ogDescription', __('titles.letters_whithout_light.ogDescription'))
@section('page', 'letters')
@section('mainPopupPayload', 'БУКВЫ БЕЗ СВЕТА (' . url()->current() . ')')

@php
$mainBaner = [
'title' => __('letters.title'),
'es' => [
'imgBig' => 'img/letters/es/Letras-córporeas-de-pvc-negro-mate-para-ferias.webp',
'imgMin' => 'img/letters/es/letras-córporeas-sin-iluminadas.webp',
],
'ru' => [
'imgBig' => 'img/letters/ru/Объемные-буквы-из-пвх-для-выставки.webp',
'imgMin' => 'img/letters/ru/Обьемные-буквы-без-света.webp',
],
'alt' => __('alt.letters.baner'),
'circle_text' => __('letters.circle')
];

$breadCrumbs = [
'links' => [
[
'route' => route('home', ['locale' => __('lang.current')]),
'label' => __('crumbs.home')
],
// Add other breadcrumb elements as needed
],
'currentPage' => __('crumbs.letters')
];

$mounts = [
'title' => __('letters.mounts.title'),
'text' => __('letters.mounts.text'),
'img' => [
[
'es' => 'img/letters/es/mounts/letras-de-pvc-20-mm-acabado-oro-con-frente-de-alumio.webp',
'ru' => 'img/letters/ru/mounts/Золотые-буквы-объемные-толщиной-20 мм-из-пвх-с-фронтальным-золотым-алюминием.webp',
'img_title' => __('letters.mounts.img.1'),
'alt' => '',
],
[
'es' => 'img/letters/es/mounts/letras-corporeas-con-separadores.webp',
'ru' => 'img/letters/ru/mounts/Объемные-буквы-с-дистанцирующими-держателями.webp',
'img_title' => __('letters.mounts.img.2'),
'alt' => '',
],
],
];

$questions = [
[
'question' => __('letters.questions.1.question'),
'answer' => __('letters.questions.1.answer'),
],
[
'question' => __('letters.questions.2.question'),
'answer' => __('letters.questions.2.answer'),
],
[
'question' => __('letters.questions.3.question'),
'answer' => __('letters.questions.3.answer'),
],
[
'question' => __('letters.questions.4.question'),
'answer' => __('letters.questions.4.answer'),
],
[
'question' => __('letters.questions.5.question'),
'answer' => __('letters.questions.5.answer'),
],
[
'question' => __('letters.questions.6.question'),
'answer' => __('letters.questions.6.answer'),
],
[
'question' => __('letters.questions.7.question'),
'answer' => __('letters.questions.7.answer'),
],
[
'question' => __('letters.questions.8.question'),
'answer' => __('letters.questions.8.answer'),
],
];
@endphp

@section('content')
<x-main-baner :baner="$mainBaner" />
<x-bread-crumbs :crumbs="$breadCrumbs" />
<x-main-text>
  @lang('letters.text')
</x-main-text>
@include('inc.letters.material')
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
<x-letters.two-images-section :data="$mounts" />
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
  <div class="portfolio__show-more">
    <a class="portfolio__show-more-link"
      href="{{ route('portfolio', ['locale' => __('lang.current')]) }}">@lang('portfolio.show_more')
      <span>&rarr;</span></a>
  </div>
</section>
<x-lead>
  <x-slot name="title">@lang('letters.lead.title')</x-slot>
  <x-slot name="text">@lang('letters.lead.text')</x-slot>
  <x-slot name="leadInfo">БУКВЫ БЕЗ СВЕТА ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('letters.about_text')
</x-about>
<x-questionLead>
  БУКВЫ БЕЗ СВЕТА ({{ url()->current() }})
</x-questionLead>
@endsection