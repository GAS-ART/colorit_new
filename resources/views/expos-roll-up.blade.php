@extends('layout')
@section('title', __('titles.expos_roll_up.title'))
@section('description', __('titles.expos_roll_up.description'))
@section('ogTitle' ,__('titles.expos_roll_up.ogTitle'))
@section('ogDescription', __('titles.expos_roll_up.ogDescription'))
@section('expos_roll_up', 'active')
@section('mainPopupPayload', 'РОЛЛ АП (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  РОЛЛ АП
</section>
@endsection