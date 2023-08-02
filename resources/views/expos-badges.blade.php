@extends('layout')
@section('title', __('titles.expos_badges.title'))
@section('description', __('titles.expos_badges.description'))
@section('ogTitle' ,__('titles.expos_badges.ogTitle'))
@section('ogDescription', __('titles.expos_badges.ogDescription'))
@section('expos_badges', 'active')
@section('mainPopupPayload', 'БЕЙДЖИ (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  БЕЙДЖИ
</section>
@endsection