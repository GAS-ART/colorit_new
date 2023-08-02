@extends('layout')
@section('title', __('titles.expos_figures.title'))
@section('description', __('titles.expos_figures.description'))
@section('ogTitle' ,__('titles.expos_figures.ogTitle'))
@section('ogDescription', __('titles.expos_figures.ogDescription'))
@section('expos_figures', 'active')
@section('mainPopupPayload', 'ФИГУРЫ (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  ФИГУРЫ
</section>
@endsection