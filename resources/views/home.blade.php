@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'home')

@section('content')

<section class="main">
    <div class="main__baner">
        <picture>
            @if(App::isLocale('es'))
            <source type="image/webp" srcset="{{ asset('img/home/es/1_.webp') }}" media="(min-width: 768px)">
            <source type="image/webp" srcset="{{ asset('img/home/es/1mob_.webp') }}">
            @elseif(App::isLocale('ru'))
            <source type="image/webp" srcset="{{ asset('img/home/ru/1_.webp') }}" media="(min-width: 768px)">
            <source type="image/webp" srcset="{{ asset('img/home/ru/1mob_.webp') }}">
            @endif
            @if(App::isLocale('es'))
            <img src="{{ asset('img/home/es/1_.webp') }}" alt="">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/home/ru/1_.webp') }}" alt="">
            @endif
        </picture>
    </div>
    <div class="main__content">
        <div class="main__body">
            <div class="main__border"></div>
            <h1 class="main__title">@lang('home.main.title')</h1>
            <ul class="main__list">
                <li class="main__list-item">@lang('home.main.list-1')</li>
                <li class="main__list-item">@lang('home.main.list-2')</li>
                <li class="main__list-item">@lang('home.main.list-3')</li>
                <li class="main__list-item">@lang('home.main.list-4')</li>
            </ul>
            <button class="main__btn">@lang('home.main.btn')</button>
        </div>
    </div>


    <div class="main_img-rating">
        <img src="{{ asset('img/home/google.webp') }}" alt="">
    </div>
</section>
<section class="quiz">
    <div class="quiz__container">
        <h2 class="quiz__title">@lang('home.quiz.title')</h2>
        <h3 class="quiz__sub-title">@lang('home.quiz.sub-title')</h3>
        <div class="quiz__body quiz-body">
            <div class="quiz-body__overlay"></div>
            <div class="quiz-body__progres">
                <div class="quiz-body__progres-line"><span></span></div>
                <div class="quiz-body__progres-count">@lang('home.quiz.count')</div>
            </div>
            <h4 class="quiz-body__title">@lang('home.quiz.body.title')</h4>
            <div class="quiz-body__slider swiper">
                <div class="swiper-wrapper">
                    <div data-quiz="signboards" class="swiper-slide">
                        <div class="item-quiz__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/quiz/es/1_.webp') }}" alt="">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/quiz/ru/1_.webp') }}" alt="">
                            @endif
                        </div>
                        <h3 class="item-quiz__title">@lang('home.quiz.body.signboards.title')</h3>
                    </div>
                    <div data-quiz="letters" class="swiper-slide">
                        <div class="item-quiz__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/quiz/es/2_.webp') }}" alt="">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/quiz/ru/2_.webp') }}" alt="">
                            @endif
                        </div>
                        <h3 class="item-quiz__title">@lang('home.quiz.body.letters.title')</h3>
                    </div>
                    <div data-quiz="vinul" class="swiper-slide">
                        <div class="item-quiz__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/quiz/es/3_.webp') }}" alt="">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/quiz/ru/3_.webp') }}" alt="">
                            @endif
                        </div>
                        <h3 class="item-quiz__title">@lang('home.quiz.body.vinyl.title')</h3>
                    </div>
                    <div data-quiz="event" class="swiper-slide">
                        <div class="item-quiz__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/quiz/es/4_.webp') }}" alt="">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/quiz/ru/4_.webp') }}" alt="">
                            @endif
                        </div>
                        <h3 class="item-quiz__title">@lang('home.quiz.body.event.title')</h3>
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button"></div>
                <div class="swiper-button-next swiper-button"></div>
            </div>
            <button data-quiz="init" class="quiz-body__back-btn disabled"><span class="arrow">&larr;</span><span
                    class="text">@lang('home.quiz.back_btn')</span></button>
        </div>
    </div>
</section>
<section>
    <div class="test__container">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptatibus corporis numquam aliquid ea sit
        corrupti ad omnis error exercitationem aspernatur ducimus, placeat velit veritatis debitis molestiae ab minus
        dolorum!
    </div>

</section>
@endsection