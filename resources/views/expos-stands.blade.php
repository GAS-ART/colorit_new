@extends('layout')
@section('title', __('titles.expos_stands.title'))
@section('description', __('titles.expos_stands.description'))
@section('ogTitle' ,__('titles.expos_stands.ogTitle'))
@section('ogDescription', __('titles.expos_stands.ogDescription'))
@section('expos_stands', 'active')
@section('mainPopupPayload', 'СТЕНДЫ (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('expos.stands.text')
</x-main-text>
<x-swiper.swiper-4 :data="$types" />
<section class="service">
  <div class="service__container">
    <div class="service__title">@lang('expos.stands.service.title')</div>
    <div class="service__cards">
      <div class="service__card">
        <div class="service__card-image"><img src="{{asset('img/expos/stands/icons/design.svg')}}" alt=""></div>
        <div class="service__card-title">@lang('expos.stands.service.cards_title.1')</div>
      </div>
      <div class="service__card">
        <div class="service__card-image"><img src="{{asset('img/expos/stands/icons/3d.svg')}}" alt=""></div>
        <div class="service__card-title">@lang('expos.stands.service.cards_title.2')</div>
      </div>
      <div class="service__card">
        <div class="service__card-image"><img src="{{asset('img/expos/stands/icons/production.svg')}}" alt=""></div>
        <div class="service__card-title">@lang('expos.stands.service.cards_title.3')</div>
      </div>
      <div class="service__card">
        <div class="service__card-image"><img src="{{asset('img/expos/stands/icons/delivery.svg')}}" alt=""></div>
        <div class="service__card-title">@lang('expos.stands.service.cards_title.4')</div>
      </div>
      <div class="service__card">
        <div class="service__card-image"><img src="{{asset('img/expos/stands/icons/set-up.svg')}}" alt=""></div>
        <div class="service__card-title">@lang('expos.stands.service.cards_title.5')</div>
      </div>
      <div class="service__card">
        <div class="service__card-image"><img src="{{asset('img/expos/stands/icons/dismantling.svg')}}" alt=""></div>
        <div class="service__card-title">@lang('expos.stands.service.cards_title.6')</div>
      </div>
    </div>
  </div>
</section>
<x-portfolio :$portfolioImages />
<x-lead>
  <x-slot name="title">@lang('expos.stands.lead.title')</x-slot>
  <x-slot name="leadInfo">СТЕНДЫ ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('expos.stands.about_text')
</x-about>
@endsection