@extends('layout')
@section('title', __('titles.about_us.title'))
@section('description', __('titles.about_us.description'))
@section('ogTitle' ,__('titles.about_us.ogTitle'))
@section('ogDescription', __('titles.about_us.ogDescription'))
@section('about_us', 'active')
@section('mainPopupPayload', 'О НАС (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  О НАС
</section>
@endsection