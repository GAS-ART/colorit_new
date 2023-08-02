@extends('layout')
@section('title', __('titles.vinyl_regular.title'))
@section('description', __('titles.vinyl_regular.description'))
@section('ogTitle' ,__('titles.vinyl_regular.ogTitle'))
@section('ogDescription', __('titles.vinyl_regular.ogDescription'))
@section('vinyl_regular', 'active')
@section('mainPopupPayload', 'ВИНИЛ ОБЫЧНЫЙ (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  ВИНИЛ ОБЫЧНЫЙ
</section>
@endsection