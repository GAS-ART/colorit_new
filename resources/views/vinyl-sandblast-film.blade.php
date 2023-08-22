@extends('layout')
@section('title', __('titles.sandblast_film.title'))
@section('description', __('titles.sandblast_film.description'))
@section('ogTitle' ,__('titles.sandblast_film.ogTitle'))
@section('ogDescription', __('titles.sandblast_film.ogDescription'))
@section('sandblast_film', 'active')
@section('mainPopupPayload', 'ПЕСКОСТРУЙНАЯ ПЛЕНКА (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('vinyl.sandblast_film.text')
</x-main-text>
<x-swiper.swiper-3 :data="$types" />
<x-advantages :$advantages />
@endsection