@extends('layout')
@section('title', __('titles.expos_wall_banner.title'))
@section('description', __('titles.expos_wall_banner.description'))
@section('ogTitle' ,__('titles.expos_wall_banner.ogTitle'))
@section('ogDescription', __('titles.expos_wall_banner.ogDescription'))
@section('expos_wall_banner', 'active')
@section('mainPopupPayload', 'БРЕНДВОЛЛ (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('expos.brandwall.text')
</x-main-text>
<x-two-images-section :data="$types" />
<section class="brand-wall">
  <div class="brand-wall__container">
    <div class="brand-wall__text">@lang('expos.brandwall.content_before_image')</div>
    <x-swiper.swiper-3 :data="$aluminum" />
    <div class="brand-wall__text">@lang('expos.brandwall.content_after_image')</div>
    <x-swiper.swiper-3 :data="$chrome" />
  </div>
</section>

<x-portfolio :$portfolioImages />
<x-lead>
  <x-slot name="title">@lang('expos.brandwall.lead.title')</x-slot>
  <x-slot name="leadInfo">БРЕНДВОЛЛ ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
{{-- <x-about>
  @lang('vinyl.regular.about_text')
</x-about> --}}
<x-question-lead>
  БРЕНДВОЛЛ ({{ url()->current() }})
</x-question-lead>
@endsection