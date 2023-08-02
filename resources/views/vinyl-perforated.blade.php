@extends('layout')
@section('title', __('titles.vinyl_perforated.title'))
@section('description', __('titles.vinyl_perforated.description'))
@section('ogTitle' ,__('titles.vinyl_perforated.ogTitle'))
@section('ogDescription', __('titles.vinyl_perforated.ogDescription'))
@section('vinyl_perforated', 'active')
@section('mainPopupPayload', 'ВИНИЛ ПЕРФОРИРОВАННЫЙ (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  ВИНИЛ ПЕРФОРИРОВАННЫЙ
</section>
@endsection