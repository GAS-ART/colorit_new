@extends('layout')
@section('title', __('titles.signboards_whith_light.title'))
@section('description', __('titles.signboards_whith_light.description'))
@section('ogTitle' ,__('titles.signboards_whith_light.ogTitle'))
@section('ogDescription', __('titles.signboards_whith_light.ogDescription'))
@section('signboards_whith_light', 'active')
@section('mainPopupPayload', 'ВЫВЕСКИ СО СВЕТОМ (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('signboards.whith_light.text')
</x-main-text>
<x-swiper.swiper-3 :data="$variants" />
<x-swiper.swiper-4 :data="$material" />
<x-two-images-section :data="$thiknes" />
<x-two-images-section :data="$backlight" />
<x-portfolio :$portfolioImages />
<x-lead>
  <x-slot name="title">@lang('signboards.whith_light.lead.title')</x-slot>
  <x-slot name="leadInfo">ВЫВЕСКИ СО СВЕТОМ ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('signboards.whith_light.about_text')
</x-about>
<x-question-lead>
  ВЫВЕСКИ СО СВЕТОМ ({{ url()->current() }})
</x-question-lead>
@endsection