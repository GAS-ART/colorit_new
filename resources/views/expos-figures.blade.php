@extends('layout')
@section('title', __('titles.expos_figures.title'))
@section('description', __('titles.expos_figures.description'))
@section('ogTitle' ,__('titles.expos_figures.ogTitle'))
@section('ogDescription', __('titles.expos_figures.ogDescription'))
@section('expos_figures', 'active')
@section('mainPopupPayload', 'ФИГУРЫ (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('expos.figures.text')
</x-main-text>
<x-swiper.swiper-5 :data="$material"/>
<x-two-images-section :data="$backlight" />
<x-portfolio :$portfolioImages />
<x-lead>
  <x-slot name="title">@lang('expos.figures.lead.title')</x-slot>
  <x-slot name="leadInfo">ФИГУРЫ ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('expos.figures.about_text')
</x-about>
<x-question-lead>
  ФИГУРЫ ({{ url()->current() }})
</x-question-lead>
@endsection