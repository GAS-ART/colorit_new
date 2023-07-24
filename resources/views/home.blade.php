@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'home')
@section('mainPopupPayload', 'Главная страница (' . url()->current() . ')')

@section('content')

<section class="main">
    <div class="main__baner">
        <picture>
            @if(App::isLocale('es'))
            <source type="image/webp"
                srcset="{{ asset('img/home/es/Rotulos-y-letras-copróreas-fabricacion-en-barcelona.webp') }}"
                media="(min-width: 768px)">
            <source type="image/webp"
                srcset="{{ asset('img/home/es/Rotulos-y-letras-copróreas-fabricacion-en-barcelona_.webp') }}">
            <img src="{{ asset('img/home/es/1_.webp') }}" alt="@lang('alt.home.baner_icon')">
            @elseif(App::isLocale('ru'))
            <source type="image/webp"
                srcset="{{ asset('img/home/ru/Изготовление-вывесок-и-обьемных-букв-в-барселоне.webp') }}"
                media="(min-width: 768px)">
            <source type="image/webp"
                srcset="{{ asset('img/home/ru/Изготовление-вывесок-и-обьемных-букв-в-барселоне_.webp') }}">
            <img src="{{ asset('img/home/ru/1_.webp') }}" alt="@lang('alt.home.baner_icon')">
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
            <a href="#quizSection" class="main__btn ancor">@lang('home.main.btn')<span class="flare white"></span></a>
        </div>
    </div>


    <a target="_blank"
        href="https://www.google.com/search?gs_ssp=eJzj4tVP1zc0LKgsK0i3LLQ0YLRSNagwNEo0STS2tDRMTTNJsUwztTKoMDI2MLE0TUsySTawMEy2sPTiS87PyS_KLFFITE_NS64EAMKUFMY&q=colorit+agency&oq=colo&aqs=chrome.1.69i57j46i39i175i199i650j0i67i650j0i512l3j46i175i199i512j0i512l2j0i271.87366396j0j15&sourceid=chrome&ie=UTF-8#lrd=0x12a4a3991ef4d9f5:0x230495fb4c081c89,1,,,,"
        class="main_img-rating">
        <img src="{{ asset('img/home/google.webp') }}" alt="">
    </a>
</section>
<section id="quizSection" class="quiz">
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
                    @foreach ($quizData as $quiz)
                    <div {!! implode(" ", $quiz['data']) !!} class=" swiper-slide {{$quiz['class'] ?? null}}">
                        <div class="item-quiz__img">
                            <img src="{{ asset($quiz[App::currentLocale()]) }}" alt="{{__($quiz['alt'])}}">
                        </div>
                        <h3 class="item-quiz__title">{{__($quiz['title'])}}</h3>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="quiz-body__slider-btns">
                <div class="swiper-button-prev swiper-button">&larr;</div>
                <div class="swiper-button-next swiper-button">&rarr;</div>
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
                        @lang('home.solution.card.5')
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
                        @lang('home.solution.card.2')
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
                    <a href="/docs/20-gaid.pdf" download class="solution__free-btn">@lang('home.solution.free.btn')<span
                            class="flare"></span></a>
                </div>
                <div class="solution__free-img">
                    <img src="{{asset('img/home/es/solution/tablet-full.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio">
    <div class="portfolio__conent">
        <h2 class="portfolio__title">@lang('portfolio.title')</h2>
        <div class="portfolio__text">
            <h3 class="portfolio__text-title">@lang('portfolio.text_title')</h3>
            <h4 class="portfolio__text-text">@lang('portfolio.text')</h4>
        </div>
    </div>
    <div class="portfolio__container">
        <div class="portfolio__slider slider-portfolio swiper">
            <div class="swiper-wrapper slider-portfolio__wrapper">
                <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                    <div class="portfolio-slide__body">
                        <div class="portfolio-slide__img">
                            @if(App::isLocale('es'))
                            <img src="{{ asset('img/home/es/portfolio/Rotulo-luminoso-de-metacrilato-para-una-tienda-rewers.webp') }}"
                                alt="@lang('alt.home.posrtfolio.1')">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Лайтбокс-10-см-из-акрилата-с-внутренней-подсветкой.webp') }}"
                                alt="@lang('alt.home.posrtfolio.1')">
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
                            <img src="{{ asset('img/home/es/portfolio/Letras-volumetricas-iluminadas-con-frente-dorado.webp') }}"
                                alt="@lang('alt.home.posrtfolio.2')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Буквы-обьемные-световые-с-зеркальными-золотыми-накладками.webp') }}"
                                alt="@lang('alt.home.posrtfolio.2')" loading="lazy">
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
                            <img src="{{ asset('img/home/es/portfolio/Rotulo-de-dibond-con-letras-corporeas-luminosas.webp') }}"
                                alt="@lang('alt.home.posrtfolio.3')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Вывеска-из-композита-со-световыми-буквами.webp') }}"
                                alt="@lang('alt.home.posrtfolio.3')" loading="lazy">
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
                            <img src="{{ asset('img/home/es/portfolio/Bandeja-calada-con-letras-de-metacrilato-20-mm.webp') }}"
                                alt="@lang('alt.home.posrtfolio.4')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Вывеска-с-фрезерной-резкой-и-акриловыми-буквами-20-mm.webp') }}"
                                alt="@lang('alt.home.posrtfolio.4')" loading="lazy">
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
                            <img src="{{ asset('img/home/es/portfolio/Rotulo-exterior-de-dibond-blanco-con-letras-corporeas.webp') }}"
                                alt="@lang('alt.home.posrtfolio.5')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Наружная-вывеска-из-белого-композита-с-буквами-обьемными.webp') }}"
                                alt="@lang('alt.home.posrtfolio.5')" loading="lazy">
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
                            <img src="{{ asset('img/home/es/portfolio/Arco-para-feria-de-mdf-impreso-y-madera.webp') }}"
                                alt="@lang('alt.home.posrtfolio.6')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Арка-для-выставки-из-пвх-с-печатью-и-структурой-из-мдф.webp') }}"
                                alt="@lang('alt.home.posrtfolio.6')" loading="lazy">
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
                            <img src="{{ asset('img/home/es/portfolio/Bandeja-fresada-con-la-luz-para-salon-de-belleza.webp') }}"
                                alt="@lang('alt.home.posrtfolio.7')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Вывеска-из-композита-с-резкой-и-внутренней-подсветкой.webp') }}"
                                alt="@lang('alt.home.posrtfolio.7')" loading="lazy">
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
                            <img src="{{ asset('img/home/es/portfolio/Letras-corporeas-retroiliminadas-de-pvc-negro-mate.webp') }}"
                                alt="@lang('alt.home.posrtfolio.8')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Буквы-обьемные-черные-с-подсветкой-контражур.webp') }}"
                                alt="@lang('alt.home.posrtfolio.8')" loading="lazy">
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
                            <img src="{{ asset('img/home/es/portfolio/Photocall-300-cm-con-la-estructura-de-aluminio-para-ferias.webp') }}"
                                alt="@lang('alt.home.posrtfolio.9')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Фотозона-300-см-с-алюминиевой-конструкцией-для-презентации.webp') }}"
                                alt="@lang('alt.home.posrtfolio.9')" loading="lazy">
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
                            <img src="{{ asset('img/home/es/portfolio/Letras-volumetricas-iluminadas-para-tienda.webp') }}"
                                alt="@lang('alt.home.posrtfolio.10')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Буквы-с-подсветкой-на-алюминиевом-коробе.webp') }}"
                                alt="@lang('alt.home.posrtfolio.10')" loading="lazy">
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
                            <img src="{{ asset('img/home/es/portfolio/Letras-corporeas-de-pvc-blanco-30-mm-con-separadores.webp') }}"
                                alt="@lang('alt.home.posrtfolio.11')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Обьемные-буквы-из-белого-пвх-30-мм-с-креплениями.webp') }}"
                                alt="@lang('alt.home.posrtfolio.11')" loading="lazy">
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
                            <img src="{{ asset('img/home/es/portfolio/Alas-retroiliminadas-de-pvc-blanco-19-mm-con-espejo-dorado.webp') }}"
                                alt="@lang('alt.home.posrtfolio.12')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Обьемные-световые-крылья-из-золотого-алюминия-и-подсветкой-контражур.webp') }}"
                                alt="@lang('alt.home.posrtfolio.12')" loading="lazy">
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
                            <img src="{{ asset('img/home/es/portfolio/Rotulo-con-letras-retroiluminadas-para-tienda-en-barcelona.webp') }}"
                                alt="@lang('alt.home.posrtfolio.13')" loading="lazy">
                            @elseif(App::isLocale('ru'))
                            <img src="{{ asset('img/home/ru/portfolio/Вывеска-с-объемными-световыми-25-мм-буквами.webp') }}"
                                alt="@lang('alt.home.posrtfolio.13')" loading="lazy">
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
            <button data-popup-id="main" data-popup-gift="true" class="gift__btn link-on-popup">
                @lang('home.gift.btn')<span class="flare white"></span>
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
<section class="review">
    <div class="review__container">
        <div class="review__title">
            @lang('home.reviews.title')
        </div>
        <div class="review__body">
            <div class="review__img">
                @if(App::isLocale('es'))
                <img src="{{ asset('img/home/es/review/1_.webp') }}" alt="">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/home/ru/review/1_.webp') }}" alt="">
                @endif
            </div>
            <div class="review__content">
                <div class="review__slider slider-review swiper">
                    <div class="swiper-wrapper slider-review__wrapper">
                        <div class="swiper-slide slider-review__slide review-slide">
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.ecotown.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.ecotown.text')</div>
                            </div>
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.melanta.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.melanta.text')</div>
                            </div>
                        </div>
                        <div class="swiper-slide slider-review__slide review-slide">
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.duo.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.duo.text')</div>
                            </div>
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.floratelie.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.floratelie.text')</div>
                            </div>
                        </div>
                        <div class="swiper-slide slider-review__slide review-slide">
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.kabakova.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.kabakova.text')</div>
                            </div>
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.zubko.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.zubko.text')</div>
                            </div>
                        </div>
                        <div class="swiper-slide slider-review__slide review-slide">
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.gas_auto.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.gas_auto.text')</div>
                            </div>
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.estetica.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.estetica.text')</div>
                            </div>
                        </div>
                        <div class="swiper-slide slider-review__slide review-slide">
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.globos.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.globos.text')</div>
                            </div>
                        </div>
                        <div class="swiper-slide slider-review__slide review-slide">
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.bike_parts.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.bike_parts.text')</div>
                            </div>
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.detailing.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.detailing.text')</div>
                            </div>
                        </div>
                        <div class="swiper-slide slider-review__slide review-slide">
                            <div class="review-slide__body">
                                <h4 class="review__content-title">@lang('home.reviews.li_beauty.name')</h4>
                                <div class="review__content-text">@lang('home.reviews.li_beauty.text')</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-review__btns">
                    <div class="slider-review__btn-prev">&larr;</div>
                    <div class="slider-review__btn-next">&rarr;</div>
                </div>
            </div>
        </div>
    </div>
</section>
<x-questions :$questions />
<x-about>
    @lang('home.about.text')
</x-about>
<x-question-lead>
    ГЛАВНАЯ СТРАНИЦА ({{ url()->current() }})
</x-question-lead>
@endsection