@extends('layout')
@section('title', __('titles.sandblast_film.title'))
@section('description', __('titles.sandblast_film.description'))
@section('ogTitle' ,__('titles.sandblast_film.ogTitle'))
@section('ogDescription', __('titles.sandblast_film.ogDescription'))
@section('sandblast_film', 'active')
@section('mainPopupPayload', 'ПЕСКОСТРУЙНАЯ ПЛЕНКА (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  ПЕСКОСТРУЙНАЯ ПЛЕНКА
</section>
@endsection