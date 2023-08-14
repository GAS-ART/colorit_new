@extends('layout')
@section('title', __('titles.lightbox.title'))
@section('description', __('titles.lightbox.description'))
@section('ogTitle' ,__('titles.lightbox.ogTitle'))
@section('ogDescription', __('titles.lightbox.ogDescription'))
@section('lightbox', 'active')
@section('mainPopupPayload', 'ЛАЙТБОКС ИЗ КОМПОЗИТА (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('signboards.lightbox.text')
</x-main-text>
<x-portfolio :$portfolioImages />
<x-lead>
  <x-slot name="title">@lang('signboards.lightbox.lead.title')</x-slot>
  <x-slot name="leadInfo">ЛАЙТБОКС ИЗ КОМПОЗИТА ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('signboards.lightbox.about_text')
</x-about>
<x-question-lead>
  ЛАЙТБОКС ИЗ КОМПОЗИТА ({{ url()->current() }})
</x-question-lead>
@endsection