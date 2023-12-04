@extends('layout')
@section('title', __('titles.letters_whithout_light.title'))
@section('description', __('titles.letters_whithout_light.description'))
@section('ogTitle', __('titles.letters_whithout_light.ogTitle'))
@section('ogDescription', __('titles.letters_whithout_light.ogDescription'))
@section('page', 'letters')
@section('mainPopupPayload', 'ПОРТФОЛИО (' . url()->current() . ')')

@section('content')

    <section style="text-align: center; font-size: 60px; font-weight:700; color: #89368E;" class="test__container">
        ПОРТФОЛИО
    </section>

    <section class="portfolio-page">
        <div class="portfolio-page__container">
            <div class="portfolio-page__body">

            </div>
        </div>
    </section>
@endsection
