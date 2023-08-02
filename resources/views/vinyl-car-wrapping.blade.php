@extends('layout')
@section('title', __('titles.vinyl_car_wrapping.title'))
@section('description', __('titles.vinyl_car_wrapping.description'))
@section('ogTitle' ,__('titles.vinyl_car_wrapping.ogTitle'))
@section('ogDescription', __('titles.vinyl_car_wrapping.ogDescription'))
@section('vinyl_car_wrapping', 'active')
@section('mainPopupPayload', 'ВИНИЛ ОБКЛЕЙКА МАШИНЫ (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  ВИНИЛ ОБКЛЕЙКА МАШИНЫ
</section>
@endsection