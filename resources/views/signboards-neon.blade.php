@extends('layout')
@section('title', __('titles.neon.title'))
@section('description', __('titles.neon.description'))
@section('ogTitle' ,__('titles.neon.ogTitle'))
@section('ogDescription', __('titles.neon.ogDescription'))
@section('neon', 'active')
@section('mainPopupPayload', 'НЕОН (' . url()->current() . ')')

@section('content')
<x-main-banner :$banner />
<x-bread-crumbs :$breadCrumbs />
<x-main-text>
  @lang('signboards.neon.text')
</x-main-text>
<x-two-images-section :data="$material" />
@endsection