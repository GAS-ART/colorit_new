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
<section class="clothes-content">
  <div class="clothes-content__container">
    <div class="clothes-content__item">@lang('expos.clothes.content.text-1')</div><br>
    <div class="clothes-content__item">@lang('expos.clothes.content.text-2')</div><br>
    <div class="clothes-content__item">@lang('expos.clothes.content.text-3')</div><br>
  </div>
</section>
<x-swiper.swiper-4 :data="$examples" />
{{-- <x-portfolio :$portfolioImages /> --}}
<x-lead>
  <x-slot name="title">@lang('expos.clothes.lead.title')</x-slot>
  <x-slot name="leadInfo">ОДЕЖДА ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
{{-- <x-about>
  @lang('vinyl.regular.about_text')
</x-about> --}}
<x-question-lead>
  ОДЕЖДА ({{ url()->current() }})
</x-question-lead>
@endsection