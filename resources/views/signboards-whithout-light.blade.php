@extends('layout')
@section('title', __('titles.signboards_whithout_light.title'))
@section('description', __('titles.signboards_whithout_light.description'))
@section('ogTitle' ,__('titles.signboards_whithout_light.ogTitle'))
@section('ogDescription', __('titles.signboards_whithout_light.ogDescription'))
@section('signboards_whithout_light', 'active')
@section('mainPopupPayload', 'ВЫВЕСКИ БЕЗ СВЕТА (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  ВЫВЕСКИ БЕЗ СВЕТА
</section>
@endsection