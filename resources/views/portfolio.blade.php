@extends('layout')
@section('title', __('titles.letters_whithout_light.title'))
@section('description', __('titles.letters_whithout_light.description'))
@section('ogTitle' ,__('titles.letters_whithout_light.ogTitle'))
@section('ogDescription', __('titles.letters_whithout_light.ogDescription'))
@section('page', 'letters')
@section('mainPopupPayload', 'БУКВЫ БЕЗ СВЕТА (' . url()->current() . ')')

@section('content')
ПОРТФОЛИО!
@endsection