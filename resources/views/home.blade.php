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
    <div class="quiz__container quiz-container">
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
                    <div data-quiz="vinyl" class="swiper-slide">
                        <div class="item-quiz__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/quiz/es/3_.webp') }}" alt="">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/quiz/ru/3_.webp') }}" alt="">
                            @endif
                        </div>
                        <h3 class="item-quiz__title">@lang('home.quiz.body.vinyl.title')</h3>
                    </div>
                    <div data-popup-id="quiz" data-popup-payload="Event" class="swiper-slide link-on-popup">
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
<section class="solution">
    <h2 class="solution__title">@lang('home.solution.title')</h2>
    <div class="solution__container">
        <div class="solution__body">
            <div class="solution__cards">
                <div class="solution__card">
                    <div class="solution__card-img">
                        <img src="{{asset('img/home/es/solution/card.svg')}}" alt="">
                    </div>
                    <div class="solution__card-text">
                        @lang('home.solution.card.1')
                    </div>
                </div>
                <div class="solution__card">
                    <div class="solution__card-img">
                        <img src="{{asset('img/home/es/solution/card.svg')}}" alt="">
                    </div>
                    <div class="solution__card-text">
                        @lang('home.solution.card.2')
                    </div>
                </div>
                <div class="solution__card">
                    <div class="solution__card-img">
                        <img src="{{asset('img/home/es/solution/card.svg')}}" alt="">
                    </div>
                    <div class="solution__card-text">
                        @lang('home.solution.card.3')
                    </div>
                </div>
                <div class="solution__card">
                    <div class="solution__card-img">
                        <img src="{{asset('img/home/es/solution/card.svg')}}" alt="">
                    </div>
                    <div class="solution__card-text">
                        @lang('home.solution.card.4')
                    </div>
                </div>
                <div class="solution__card">
                    <div class="solution__card-img">
                        <img src="{{asset('img/home/es/solution/card.svg')}}" alt="">
                    </div>
                    <div class="solution__card-text">
                        @lang('home.solution.card.5')
                    </div>
                </div>
                <div class="solution__card">
                    <div class="solution__card-img">
                        <img src="{{asset('img/home/es/solution/card.svg')}}" alt="">
                    </div>
                    <div class="solution__card-text">
                        @lang('home.solution.card.6')
                    </div>
                </div>
            </div>
            <div class="solution__free">
                <div class="solution__free-content">
                    <h3 class="solution__free-text">@lang('home.solution.free.title')</h3>
                    {{-- <a href="/docs/fiwhcd050c.pdf" download>@lang('home.solution.free.btn')</a> --}}
                    <a href="#" download class="solution__free-btn">@lang('home.solution.free.btn')</a>
                </div>
                <div class="solution__free-img">
                    <img src="{{asset('img/home/es/solution/tablet-full.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio">
    <div class="portfolio__container">
        <div class="portfolio__text">
            <h2 class="portfolio__title">@lang('home.portfolio.title')</h2>
            <div class="portfolio__description">
                <h3 class="portfolio__sub-title">@lang('home.portfolio.sub_title')</h3>
                <p class="portfolio__sub-text">@lang('home.portfolio.sub_title_text')</p>
            </div>
        </div>
        <div class="portfolio__slider slider-portfolio swiper">
            <div class="swiper-wrapper slider-portfolio__wrapper">
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/01.webp') }}" alt="">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/01.webp') }}" alt="">
                            @endif
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.1.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.1.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.1.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/02.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/02.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.2.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.2.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.2.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/03.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/03.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.3.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.3.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.3.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/04.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/04.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.4.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.4.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.4.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/05.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/05.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.5.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.5.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.5.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/06.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/06.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.6.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.6.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.6.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/07.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/07.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.7.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.7.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.7.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/08.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/08.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.8.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.8.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.8.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/09.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/09.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.9.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.9.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.9.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/10.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/10.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.10.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.10.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.10.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/11.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/11.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.11.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.11.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.11.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/12.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/12.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.12.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.12.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.12.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/13.webp') }}" alt="" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/13.webp') }}" alt="" loading="lazy">
                            @endif
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="portfolio-slide__content">
                            <div class="portfolio-slide__text">
                                <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.13.title')</h3>
                                <p class="portfolio-slide__description">@lang('home.portfolio.slides.13.text')</p>
                            </div>
                            <div class="portfolio-slide__terms">
                                <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                <p class="portfolio-slide__term">@lang('home.portfolio.slides.13.term')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-portfolio__btns">
                <div class="slider-portfolio__btn-prev">&larr;</div>
                <div class="slider-portfolio__btn-next">&rarr;</div>
            </div>
        </div>
    </div>
</section>
<section class="gift">
    <div class="gift__container">
        <div class="gift__body">
            <div class="gift__content">
                <div class="gift__img">
                    <img src="{{asset('img/icons/gift.webp')}}" alt="">
                </div>
                <div class="gift__text">
                    <h2 class="gift__title">@lang('home.gift.title')</h2>
                    <h3 class="gift__sub-title">@lang('home.gift.sub_title')</h3>
                </div>
            </div>
            <button data-popup-id="gift" class="gift__btn link-on-popup">
                @lang('home.gift.btn')
            </button>
        </div>
    </div>
</section>
<section class="video">
    <div class="video__container">
        <div class="video__body">
            <div class="video__content">
                <h2 class="video__title">@lang('home.video.title')</h2>
                <ul class="video__list">
                    <li class="video__list-item">@lang('home.video.list.1')</li>
                    <li class="video__list-item">@lang('home.video.list.2')</li>
                    <li class="video__list-item">@lang('home.video.list.3')</li>
                </ul>
            </div>
            <div class="video__video">
                <div class="video__action">
                    <button class="video__btn"></button>
                </div>
                <img src="{{asset('img/video.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="result">
    <div class="result__container">
        <h2 class="result__title">
            @lang('home.result.title')
        </h2>
        <div class="result__body">
            <div class="result__slider slider-result swiper">
                <div class="swiper-wrapper slider-result__wrapper">
                    <div class="swiper-slide slider-result__slide result-slide">
                        <div class="result-slide__card">
                            <div class="result-slide__icon">
                                <img src="{{asset('img/icons/card.svg')}}" alt="">
                            </div>
                            <div class="result-slide__text">
                                @lang('home.result.card.1')
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slider-result__slide result-slide">
                        <div class="result-slide__card">
                            <div class="result-slide__icon">
                                <img src="{{asset('img/icons/card.svg')}}" alt="">
                            </div>
                            <div class="result-slide__text">
                                @lang('home.result.card.2')
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slider-result__slide result-slide">
                        <div class="result-slide__card">
                            <div class="result-slide__icon">
                                <img src="{{asset('img/icons/card.svg')}}" alt="">
                            </div>
                            <div class="result-slide__text">
                                @lang('home.result.card.3')
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slider-result__slide result-slide">
                        <div class="result-slide__card">
                            <div class="result-slide__icon">
                                <img src="{{asset('img/icons/card.svg')}}" alt="">
                            </div>
                            <div class="result-slide__text">
                                @lang('home.result.card.4')
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slider-result__slide result-slide">
                        <div class="result-slide__card">
                            <div class="result-slide__icon">
                                <img src="{{asset('img/icons/card.svg')}}" alt="">
                            </div>
                            <div class="result-slide__text">
                                @lang('home.result.card.5')
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slider-result__slide result-slide">
                        <div class="result-slide__card">
                            <div class="result-slide__icon">
                                <img src="{{asset('img/icons/card.svg')}}" alt="">
                            </div>
                            <div class="result-slide__text">
                                @lang('home.result.card.6')
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slider-result__slide result-slide">
                        <div class="result-slide__card">
                            <div class="result-slide__icon">
                                <img src="{{asset('img/icons/card.svg')}}" alt="">
                            </div>
                            <div class="result-slide__text">
                                @lang('home.result.card.7')
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slider-result__slide result-slide">
                        <div class="result-slide__card">
                            <div class="result-slide__icon">
                                <img src="{{asset('img/icons/card.svg')}}" alt="">
                            </div>
                            <div class="result-slide__text">
                                @lang('home.result.card.8')
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slider-result__slide result-slide">
                        <div class="result-slide__card">
                            <div class="result-slide__icon">
                                <img src="{{asset('img/icons/card.svg')}}" alt="">
                            </div>
                            <div class="result-slide__text">
                                @lang('home.result.card.9')
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slider-result__slide result-slide">
                        <div class="result-slide__card">
                            <div class="result-slide__icon">
                                <img src="{{asset('img/icons/card.svg')}}" alt="">
                            </div>
                            <div class="result-slide__text">
                                @lang('home.result.card.10')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="result-scrollbar swiper-scrollbar"></div>
            </div>
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