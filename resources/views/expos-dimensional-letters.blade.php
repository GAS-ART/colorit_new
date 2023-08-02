@extends('layout')
@section('title', __('titles.expos_dimensional_letters.title'))
@section('description', __('titles.expos_dimensional_letters.description'))
@section('ogTitle' ,__('titles.expos_dimensional_letters.ogTitle'))
@section('ogDescription', __('titles.expos_dimensional_letters.ogDescription'))
@section('expos_dimensional_letters', 'active')
@section('mainPopupPayload', 'БУКВЫ ОБЪЕМНЫЕ (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  БУКВЫ ОБЪЕМНЫЕ
</section>
@endsection