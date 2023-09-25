@extends('layout')
@section('title', __('titles.expos_clothing.title'))
@section('description', __('titles.expos_clothing.description'))
@section('ogTitle' ,__('titles.expos_clothing.ogTitle'))
@section('ogDescription', __('titles.expos_clothing.ogDescription'))
@section('expos_clothing', 'active')
@section('mainPopupPayload', 'ОДЕЖДА (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('expos.clothes.text')
</x-main-text>
<x-swiper.swiper-3 :data="$types" />
<x-swiper.swiper-3 :data="$services" />
<x-swiper.swiper-3 :data="$services2" />
{{-- <x-portfolio :$portfolioImages /> --}}
<x-lead>
  <x-slot name="title">@lang('expos.clothes.lead.title')</x-slot>
  <x-slot name="leadInfo">ОДЕЖДА ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('expos.clothes.about_text')
</x-about>
<x-question-lead>
  ОДЕЖДА ({{ url()->current() }})
</x-question-lead>
@endsection