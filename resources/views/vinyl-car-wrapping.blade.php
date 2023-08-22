@extends('layout')
@section('title', __('titles.vinyl_car_wrapping.title'))
@section('description', __('titles.vinyl_car_wrapping.description'))
@section('ogTitle' ,__('titles.vinyl_car_wrapping.ogTitle'))
@section('ogDescription', __('titles.vinyl_car_wrapping.ogDescription'))
@section('vinyl_car_wrapping', 'active')
@section('mainPopupPayload', 'ВИНИЛ ОБКЛЕЙКА МАШИНЫ (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('vinyl.car_wrapping.text')
</x-main-text>
<x-swiper.swiper-3 :data="$types" />
<x-advantages :$advantages />
@endsection