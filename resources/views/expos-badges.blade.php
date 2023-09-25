@extends('layout')
@section('title', __('titles.expos_badges.title'))
@section('description', __('titles.expos_badges.description'))
@section('ogTitle' ,__('titles.expos_badges.ogTitle'))
@section('ogDescription', __('titles.expos_badges.ogDescription'))
@section('expos_badges', 'active')
@section('mainPopupPayload', 'БЕЙДЖИ (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('expos.badges.text')
</x-main-text>
<x-two-images-section :data="$types2Img" />
<x-swiper.swiper-3 :data="$types" />
{{-- <x-portfolio :$portfolioImages /> --}}
<x-lead>
  <x-slot name="title">@lang('expos.clothes.lead.title')</x-slot>
  <x-slot name="leadInfo">БЕЙДЖИ ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('vinyl.regular.about_text')
</x-about>
<x-question-lead>
  БЕЙДЖИ ({{ url()->current() }})
</x-question-lead>
@endsection