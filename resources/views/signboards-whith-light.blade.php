@extends('layout')
@section('title', __('titles.signboards_whith_light.title'))
@section('description', __('titles.signboards_whith_light.description'))
@section('ogTitle' ,__('titles.signboards_whith_light.ogTitle'))
@section('ogDescription', __('titles.signboards_whith_light.ogDescription'))
@section('signboards_whith_light', 'active')
@section('mainPopupPayload', 'ВЫВЕСКИ СО СВЕТОМ (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  ВЫВЕСКИ СО СВЕТОМ
</section>
@endsection