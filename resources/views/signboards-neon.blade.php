@extends('layout')
@section('title', __('titles.neon.title'))
@section('description', __('titles.neon.description'))
@section('ogTitle' ,__('titles.neon.ogTitle'))
@section('ogDescription', __('titles.neon.ogDescription'))
@section('neon', 'active')
@section('mainPopupPayload', 'НЕОН (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  НЕОН
</section>
@endsection