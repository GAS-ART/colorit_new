@extends('layout')
@section('title', __('titles.side_box.title'))
@section('description', __('titles.side_box.description'))
@section('ogTitle' ,__('titles.side_box.ogTitle'))
@section('ogDescription', __('titles.side_box.ogDescription'))
@section('side_box', 'active')
@section('mainPopupPayload', 'БОКОВОЙ ЛАЙТБОКС (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('signboards.side_box.text')
</x-main-text>
<x-two-images-section :data="$material" />
<x-swiper.swiper-3 :data="$mounts" />
<x-portfolio :$portfolioImages />
<x-lead>
  <x-slot name="title">@lang('signboards.side_box.lead.title')</x-slot>
  <x-slot name="leadInfo">БОКОВОЙ ЛАЙТБОКС ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('signboards.side_box.about_text')
</x-about>
<x-question-lead>
  БОКОВОЙ ЛАЙТБОКС ({{ url()->current() }})
</x-question-lead>
@endsection