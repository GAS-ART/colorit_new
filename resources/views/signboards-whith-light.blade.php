@extends('layout')
@section('title', __('titles.signboards_whith_light.title'))
@section('description', __('titles.signboards_whith_light.description'))
@section('ogTitle' ,__('titles.signboards_whith_light.ogTitle'))
@section('ogDescription', __('titles.signboards_whith_light.ogDescription'))
@section('signboards_whith_light', 'active')
@section('mainPopupPayload', 'ВЫВЕСКИ СО СВЕТОМ (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('signboards.whith_light.text')
</x-main-text>
<x-portfolio :$portfolioImages />
<x-questions :$questions />
<x-question-lead>
  ВЫВЕСКИ СО СВЕТОМ ({{ url()->current() }})
</x-question-lead>
@endsection