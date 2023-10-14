@extends('layout')
@section('title', __('titles.expos_banner.title'))
@section('description', __('titles.expos_banner.description'))
@section('ogTitle' ,__('titles.expos_banner.ogTitle'))
@section('ogDescription', __('titles.expos_banner.ogDescription'))
@section('expos_banner', 'active')
@section('mainPopupPayload', 'ВЫСТАВКИ -> БАННЕР (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('expos.banner.text')
</x-main-text>
<x-two-images-section :data="$types" />
<x-swiper.swiper-3 :data="$examples" />
<section class="perfo-banner">
  <div class="perfo-banner__container">
    <div class="perfo-banner__body">
      <div class="perfo-banner__text">@lang('expos.banner.perfo_banner')</div>
      <div class="perfo-banner__img">
        <img src="{{asset('img/expos/banner/'.App::currentLocale().'/perfo.webp')}}" alt="@lang('alt.expos.banner.perfo_banner')">
      </div>
    </div>
  </div>
</section>
{{-- <x-portfolio :$portfolioImages /> --}}
<x-lead>
  <x-slot name="title">@lang('expos.banner.lead.title')</x-slot>
  <x-slot name="leadInfo">ВЫСТАВКИ -> БАННЕР ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('expos.banner.about_text')
</x-about>
<x-question-lead>
  ВЫСТАВКИ -> БАННЕР ({{ url()->current() }})
</x-question-lead>
@endsection