@extends('layout')
@section('title', __('titles.letters_whithout_light.title'))
@section('description', __('titles.letters_whithout_light.description'))
@section('ogTitle', __('titles.letters_whithout_light.ogTitle'))
@section('ogDescription', __('titles.letters_whithout_light.ogDescription'))
@section('page', 'letters')
@section('mainPopupPayload', 'ПОРТФОЛИО (' . url()->current() . ')')

@section('content')
    <section class="portfolio-page">
        <h1 class="portfolio-page__title">@lang('portfolio.title')</h1>
        <div class="portfolio-page__wrapper">
            <div class="portfolio-page__menu">
                <div class="portfolio-page__menu-body">
                    <h2 class="portfolio-page__menu-title">@lang('main.categories')</h2>
                    <button data-section="all" class="portfolio-page__menu-item">
                        @lang('main.all') <span
                            class="portfolio-page__all">({{ array_reduce($images, fn($sum, $section) => $sum + $section['quantity'], 0) }})</span>
                    </button>
                    <button data-section="signboards" class="portfolio-page__menu-item">
                        @lang('main.menu.signboards.title') <span
                            class="portfolio-page__signboards">({{ $images['signboards']['quantity'] }})</span>
                    </button>
                    <button data-section="letters" class="portfolio-page__menu-item">
                        @lang('main.menu.letters.title') <span
                            class="portfolio-page__letters">({{ $images['letters']['quantity'] }})</span>
                    </button>
                    <button data-section="vinyl" class="portfolio-page__menu-item">
                        @lang('main.menu.vinyl.title') <span class="portfolio-page__vinyl">({{ $images['vinyl']['quantity'] }})</span>
                    </button>
                    <button data-section="expos" class="portfolio-page__menu-item">
                        @lang('main.menu.expos.title') <span class="portfolio-page__expos">({{ $images['expos']['quantity'] }})</span>
                    </button>
                </div>
            </div>
            <div class="portfolio-page__images">
                @foreach ($images as $section)
                    <div class="portfolio-page__section {{ $section['name'] }} active">
                        <h2 class="portfolio-page__section-title">@lang('main.menu.' . $section['name'] . '.title')</h2>
                        <div class="portfolio-page__body">
                            @for ($i = 1; $i <= $section['quantity']; $i++)
                                <div class="portfolio-page__item"><img
                                        src="{{ asset('img/portfolio/' . $section['name'] . '/' . $i . '.webp') }}"
                                        alt="">
                                </div>
                            @endfor
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
