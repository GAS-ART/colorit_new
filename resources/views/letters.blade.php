@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'letters')

@section('content')
<section class="main">
  <div class="main__baner">
    <picture>
      @if(App::isLocale('es'))
      <source type="image/webp" srcset="{{ asset('img/letters/es/main.jpg') }}" media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset('img/letters/es/main_mob.jpg') }}">
      @elseif(App::isLocale('ru'))
      <source type="image/webp" srcset="{{ asset('img/letters/ru/main.jpg') }}" media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset('img/letters/ru/main_mob.jpg') }}">
      @endif
      @if(App::isLocale('es'))
      <img src="{{ asset('img/letters/es/main.jpg') }}" alt="@lang('alt.home.baner_icon')">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/letters/ru/main.jpg') }}" alt="@lang('alt.home.baner_icon')">
      @endif
    </picture>
    <h1 class="main__baner--title">@lang('letters.title')</h1>
  </div>
</section>
@endsection