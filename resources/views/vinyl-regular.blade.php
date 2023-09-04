@extends('layout')
@section('title', __('titles.vinyl_regular.title'))
@section('description', __('titles.vinyl_regular.description'))
@section('ogTitle' ,__('titles.vinyl_regular.ogTitle'))
@section('ogDescription', __('titles.vinyl_regular.ogDescription'))
@section('vinyl_regular', 'active')
@section('mainPopupPayload', 'ВИНИЛ ОБЫЧНЫЙ (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('vinyl.regular.text')
</x-main-text>
<x-two-images-section :data="$types" />
<x-advantages :$advantages />
<x-portfolio :$portfolioImages />
<x-lead>
  <x-slot name="title">@lang('vinyl.regular.lead.title')</x-slot>
  <x-slot name="leadInfo">ВИНИЛ ОБЫЧНЫЙ ({{ url()->current() }})</x-slot>
</x-lead>
<x-questions :$questions />
<x-about>
  @lang('vinyl.regular.about_text')
</x-about>
<x-question-lead>
  ВИНИЛ ОБЫЧНЫЙ ({{ url()->current() }})
</x-question-lead>
@endsection