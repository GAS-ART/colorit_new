@extends('layout')
@section('title', __('titles.lightbox.title'))
@section('description', __('titles.lightbox.description'))
@section('ogTitle' ,__('titles.lightbox.ogTitle'))
@section('ogDescription', __('titles.lightbox.ogDescription'))
@section('lightbox', 'active')
@section('mainPopupPayload', 'ЛАЙТБОКС ИЗ КОМПОЗИТА (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  ЛАЙТБОКС ИЗ КОМПОЗИТА
</section>
<x-questions :$questions />
<x-question-lead>
  ЛАЙТБОКС ИЗ КОМПОЗИТА ({{ url()->current() }})
</x-question-lead>
@endsection