@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'home')

@section('content')

THIS IS FORM PAGE
<a href="{{ route('home', ['locale' => __('lang.current')]) }}">LINK TO HOME</a>
<form action="{{route('sendMainForm')}}" method="POST" name="mainForm" id="mainForm" class="@lang('lang.current')">
  @csrf
  <div class="popup__item">
    <label for="name">Name</label>
    <input id="name" name="name" type="text" placeholder="Enter your name">
    <p class="error-name"></p>
  </div>
  <div class="popup__item">
    <label for="phone">Phone</label>
    <input id="phone" name="phone" type="text" placeholder="Enter your phone">
    <p class="error-phone"></p>
  </div>
  <div class="popup__item">
    <label for="msg">Message</label>
    <textarea name="text" id="text" placeholder="Enter your message"></textarea>
    <p class="error-text"></p>
  </div>
  <button type="submit">SEND FORM DATA</button>
</form>
@endsection