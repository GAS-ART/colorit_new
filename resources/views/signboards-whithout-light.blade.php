@extends('layout')
@section('title', __('titles.signboards_whithout_light.title'))
@section('description', __('titles.signboards_whithout_light.description'))
@section('ogTitle' ,__('titles.signboards_whithout_light.ogTitle'))
@section('ogDescription', __('titles.signboards_whithout_light.ogDescription'))
@section('signboards_whithout_light', 'active')
@section('mainPopupPayload', 'ВЫВЕСКИ БЕЗ СВЕТА (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('signboards.whithout_light.text')
</x-main-text>
<x-two-images-section :data="$material" />
<x-two-images-section :data="$mounts" />
<x-portfolio :$portfolioImages />
<x-lead>
  <x-slot name="title">@lang('signboards.whithout_light.lead.title')</x-slot>
  <x-slot name="leadInfo">ВЫВЕСКИ БЕЗ СВЕТА ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('signboards.whithout_light.about_text')
</x-about>
<x-question-lead>
  ВЫВЕСКИ БЕЗ СВЕТА ({{ url()->current() }})
</x-question-lead>
@endsection