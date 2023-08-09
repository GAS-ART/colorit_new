@extends('layout')
@section('title', __('titles.side_box.title'))
@section('description', __('titles.side_box.description'))
@section('ogTitle' ,__('titles.side_box.ogTitle'))
@section('ogDescription', __('titles.side_box.ogDescription'))
@section('side_box', 'active')
@section('mainPopupPayload', 'БОКОВОЙ ЛАЙТБОКС (' . url()->current() . ')')

@section('content')
<section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
  БОКОВОЙ ЛАЙТБОКС
</section>
<x-questions :$questions />
<x-question-lead>
  БОКОВОЙ ЛАЙТБОКС ({{ url()->current() }})
</x-question-lead>
@endsection