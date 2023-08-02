@extends('layout')
@section('title', __('titles.expos_stands.title'))
@section('description', __('titles.expos_stands.description'))
@section('ogTitle' ,__('titles.expos_stands.ogTitle'))
@section('ogDescription', __('titles.expos_stands.ogDescription'))
@section('expos_stands', 'active')
@section('mainPopupPayload', 'СТЕНДЫ (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  СТЕНДЫ
</section>
@endsection