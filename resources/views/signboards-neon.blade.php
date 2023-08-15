@extends('layout')
@section('title', __('titles.neon.title'))
@section('description', __('titles.neon.description'))
@section('ogTitle' ,__('titles.neon.ogTitle'))
@section('ogDescription', __('titles.neon.ogDescription'))
@section('neon', 'active')
@section('mainPopupPayload', 'НЕОН (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('signboards.neon.text')
</x-main-text>
<x-two-images-section :data="$material" />
<x-two-images-section :data="$mounts" />
<x-portfolio :$portfolioImages />
<x-lead>
  <x-slot name="title">@lang('signboards.neon.lead.title')</x-slot>
  <x-slot name="leadInfo">НЕОН ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('signboards.neon.about_text')
</x-about>
<x-question-lead>
  НЕОН ({{ url()->current() }})
</x-question-lead>
@endsection