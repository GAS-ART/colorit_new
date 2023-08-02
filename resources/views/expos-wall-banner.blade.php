@extends('layout')
@section('title', __('titles.expos_wall_banner.title'))
@section('description', __('titles.expos_wall_banner.description'))
@section('ogTitle' ,__('titles.expos_wall_banner.ogTitle'))
@section('ogDescription', __('titles.expos_wall_banner.ogDescription'))
@section('expos_wall_banner', 'active')
@section('mainPopupPayload', 'БРЕНДВОЛЛ (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  БРЕНДВОЛЛ
</section>
@endsection