@extends('layout')
@section('title', __('titles.vinyl_regular.title'))
@section('description', __('titles.vinyl_regular.description'))
@section('ogTitle' ,__('titles.vinyl_regular.ogTitle'))
@section('ogDescription', __('titles.vinyl_regular.ogDescription'))
@section('vinyl_regular', 'active')
@section('mainPopupPayload', 'ВИНИЛ ОБЫЧНЫЙ (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
@endsection