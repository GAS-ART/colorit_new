@extends('layout')
@section('title', __('titles.vinyl_perforated.title'))
@section('description', __('titles.vinyl_perforated.description'))
@section('ogTitle' ,__('titles.vinyl_perforated.ogTitle'))
@section('ogDescription', __('titles.vinyl_perforated.ogDescription'))
@section('vinyl_perforated', 'active')
@section('mainPopupPayload', 'ВИНИЛ ПЕРФОРИРОВАННЫЙ (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('vinyl.perforated.text')
</x-main-text>
<x-swiper.swiper-3 :data="$types" />
<x-advantages :$advantages />
@endsection