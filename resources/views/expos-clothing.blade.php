@extends('layout')
@section('title', __('titles.expos_clothing.title'))
@section('description', __('titles.expos_clothing.description'))
@section('ogTitle' ,__('titles.expos_clothing.ogTitle'))
@section('ogDescription', __('titles.expos_clothing.ogDescription'))
@section('expos_clothing', 'active')
@section('mainPopupPayload', 'ОДЕЖДА (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  ОДЕЖДА
</section>
@endsection