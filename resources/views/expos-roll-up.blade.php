@extends('layout')
@section('title', __('titles.expos_roll_up.title'))
@section('description', __('titles.expos_roll_up.description'))
@section('ogTitle' ,__('titles.expos_roll_up.ogTitle'))
@section('ogDescription', __('titles.expos_roll_up.ogDescription'))
@section('expos_roll_up', 'active')
@section('mainPopupPayload', 'РОЛЛ АП (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('expos.rollup.text')
</x-main-text>
<x-two-images-section :data="$types" />
{{-- <x-portfolio :$portfolioImages /> --}}
<x-lead>
  <x-slot name="title">@lang('expos.rollup.lead.title')</x-slot>
  <x-slot name="leadInfo">РОЛЛ АП ({{ url()->current() }})</x-slot>
</x-lead>
{{-- <x-questions :$questions />
<x-about>
  @lang('vinyl.regular.about_text')
</x-about> --}}
<x-question-lead>
  РОЛЛ АП ({{ url()->current() }})
</x-question-lead>
@endsection