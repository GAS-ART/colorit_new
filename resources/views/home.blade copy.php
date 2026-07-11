@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('mainPopupPayload', 'Главная страница (' . url()->current() . ')')

@section('content')


    <section class="main">
        <div class="main__baner">
            <picture>
                <!-- 1. AVIF -->
                <source type="image/avif"
                    srcset="{{ asset('img/home/' . app()->getLocale() . '/' . __('home.photo.1.name') . '-desktop.avif') }}"
                    media="(min-width: 768px)">
                <source type="image/avif"
                    srcset="{{ asset('img/home/' . app()->getLocale() . '/' . __('home.photo.1.name') . '-mobile.avif') }}">

                <!-- 2. WebP -->
                <source type="image/webp"
                    srcset="{{ asset('img/home/' . app()->getLocale() . '/' . __('home.photo.1.name') . '-desktop.webp') }}"
                    media="(min-width: 768px)">
                <source type="image/webp"
                    srcset="{{ asset('img/home/' . app()->getLocale() . '/' . __('home.photo.1.name') . '-mobile.webp') }}">

                <!-- 3.JPG (MozJPEG) -->
                <img src="{{ asset('img/home/' . app()->getLocale() . '/' . __('home.photo.1.name') . '-desktop.jpg') }}"
                    alt="{{ __('alt.home.baner_icon') }}">
            </picture>
        </div>
        <div class="main__content">
            <div class="main__body">
                <h1 class="main__title">{!! __('home.main.title') !!}</h1>
                <p class="main__subtitle">{!! __('home.main.subtitle') !!}</p>
                <div class="main__actions">
                    <button data-popup-id="main"
                        class="main__btn main__btn--purple link-on-popup">@lang('home.main.btn')</button>
                    <a href="https://wa.me/34695804020" target="_blank" class="main__btn main__btn--green whatsapp-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.5266 3.46824C18.2575 1.19827 15.2407 0 12.0298 0C5.38547 0 0 5.3883 0 12.0366C0 14.1611 0.553959 16.2307 1.61168 18.0631L0.0163574 23.8887L5.97541 22.3259C7.74208 23.284 9.8524 23.7915 12.023 23.7915H12.0309C18.673 23.7915 24.062 18.4043 24.062 11.7583C24.062 8.53982 22.8105 5.51866 20.5266 3.46824ZM12.0309 21.777C10.2229 21.777 8.46821 21.2917 6.9458 20.3887L6.58661 20.1764L3.04273 21.1051L3.98801 17.652L3.75471 17.2818C2.76007 15.6983 2.23555 13.8967 2.23555 12.0354C2.23555 6.64333 6.62319 2.25344 12.0366 2.25344C14.6467 2.25344 17.1005 3.26945 18.9443 5.11545C20.787 6.96032 21.8019 9.41409 21.8019 12.0264C21.8019 17.4173 17.4143 21.777 12.0309 21.777ZM17.4063 14.4287C17.1118 14.2813 15.6601 13.5658 15.3899 13.4683C15.1186 13.3707 14.9224 13.3219 14.7262 13.6163C14.5301 13.9107 13.9894 14.5492 13.8183 14.7453C13.6461 14.9415 13.4749 14.9664 13.1804 14.819C12.8859 14.6716 11.932 14.3607 10.8037 13.3546C9.92582 12.5714 9.33328 11.609 9.16215 11.3146C8.99103 11.0202 9.14397 10.8606 9.29237 10.7145C9.4249 10.5843 9.5824 10.3758 9.72979 10.2045C9.87717 10.0321 9.92595 9.90906 10.0249 9.71295C10.1228 9.51684 10.0739 9.34468 10.0007 9.19728C9.92742 9.04988 9.33894 7.6025 9.09355 7.01358C8.85382 6.44075 8.61066 6.51884 8.43503 6.511C8.26629 6.50317 8.07009 6.50204 7.87389 6.50204C7.67769 6.50204 7.35848 6.57564 7.08836 6.87005C6.81825 7.16447 6.03362 7.89984 6.03362 9.39521C6.03362 10.8906 7.11281 12.3369 7.2602 12.533C7.40759 12.7292 9.3951 15.8202 12.4344 17.1293C13.1565 17.4405 13.7214 17.6264 14.1673 17.7681C14.8927 17.9986 15.5583 17.966 16.0827 17.8863C16.671 17.7966 17.9152 17.1352 18.1853 16.3998C18.4554 15.6644 18.4554 15.0269 18.3821 14.8795C18.3088 14.7321 18.1126 14.6345 17.8181 14.4871"
                                fill="currentColor" />
                        </svg>
                        @lang('home.main.whatsapp_btn')
                    </a>
                </div>
                <p class="main__footer-text">@lang('home.main.footer_text')</p>
            </div>
        </div>


        {{-- <a target="_blank"
            href="https://www.google.com/search?gs_ssp=eJzj4tVP1zc0LKgsK0i3LLQ0YLRSNagwNEo0STS2tDRMTTNJsUwztTKoMDI2MLE0TUsySTawMEy2sPTiS87PyS_KLFFITE_NS64EAMKUFMY&q=colorit+agency&oq=colo&aqs=chrome.1.69i57j46i39i175i199i650j0i67i650j0i512l3j46i175i199i512j0i512l2j0i271.87366396j0j15&sourceid=chrome&ie=UTF-8#lrd=0x12a4a3991ef4d9f5:0x230495fb4c081c89,1,,,,"
            class="main_img-rating">
            <img src="{{ asset('img/home/google.webp') }}" alt="">
        </a> --}}
    </section>
    <section class="services">
        <div class="services__container">
            <h2 class="services__title">@lang('home.services.title')</h2>
            <div class="services__body">
                <div class="services__cards">
                    @for ($i = 2; $i <= 5; $i++)
                        <div class="services__card">
                            <div class="services__card-img">
                                <picture>
                                    <!-- 1. AVIF -->
                                    <source type="image/avif"
                                        srcset="{{ asset('img/home/' . app()->getLocale() . '/service/' . __('home.photo.' . $i . '.name') . '.avif') }}">

                                    <!-- 2. WebP -->
                                    <source type="image/webp"
                                        srcset="{{ asset('img/home/' . app()->getLocale() . '/service/' . __('home.photo.' . $i . '.name') . '.webp') }}">

                                    <!-- 3. JPG (MozJPEG) -->
                                    <img src="{{ asset('img/home/' . app()->getLocale() . '/service/' . __('home.photo.' . $i . '.name') . '.jpg') }}"
                                        alt="{{ __('home.photo.' . $i . '.alt') }}" loading="lazy">
                                </picture>
                            </div>
                            <div class="services__card-content">
                                <h3 class="services__card-title">@lang('home.services.cards.' . $i . '.title')</h3>
                                <p class="services__card-desc">@lang('home.services.cards.' . $i . '.desc')</p>
                                <a href="{{ route('portfolio', ['locale' => __('lang.current')]) }}"
                                    class="services__card-link">{!! __('home.services.cards.' . $i . '.link') !!}</a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
    <section class="why-us">
        <div class="why-us__container">
            <h2 class="why-us__title">@lang('home.why_us.title')</h2>
            <div class="why-us__cards">
                @foreach (['location.svg', 'gear.svg', 'calendar.svg', 'key.svg', 'note.svg', 'support.svg'] as $index => $icon)
                    <div class="why-us__card">
                        <div class="why-us__card-icon">
                            <img src="{{ asset('img/home/icons/why/' . $icon) }}" alt="">
                        </div>
                        <h4 class="why-us__card-title">@lang('home.why_us.cards.' . ($index + 1) . '.title')</h4>
                        <p class="why-us__card-text">@lang('home.why_us.cards.' . ($index + 1) . '.text')</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="achievements">
        <div class="achievements__container">
            @for ($i = 1; $i <= 3; $i++)
                <div class="achievements__item">
                    <div class="achievements__number-wrapper">
                        <span class="achievements__number">@lang('home.achievements.' . $i . '.number')</span>
                        <span class="achievements__plus">+</span>
                    </div>
                    <h4 class="achievements__text">@lang('home.achievements.' . $i . '.text')</h4>
                </div>
            @endfor
        </div>
    </section>
    <section class="clients">
        <div class="clients__container">
            @for ($i = 1; $i <= 8; $i++)
                <div class="clients__item">
                    <img src="{{ asset('img/home/clients/' . $i . '.svg') }}" alt="Client {{ $i }}">
                </div>
            @endfor
        </div>
    </section>
    <section class="projects">
        <div class="projects__container">
            <h2 class="projects__title">@lang('home.projects.title')</h2>
            <p class="projects__subtitle">@lang('home.projects.subtitle')</p>
            <div class="projects__items">
                @for ($i = 6; $i <= 14; $i++)
                    @php
                        $name = __('home.photo.' . $i . '.name');
                        $alt = __('home.photo.' . $i . '.alt');
                        $cardTitle = __('home.photo.' . $i . '.title');
                        $cardText = __('home.photo.' . $i . '.text');
                        $path = 'img/home/' . app()->getLocale() . '/projects/' . $name;
                    @endphp
                    <div class="projects__item">
                        <div class="projects__item-img">
                            <picture>
                                @if (file_exists(public_path($path . '.avif')))
                                    <source srcset="{{ asset($path . '.avif') }}" type="image/avif">
                                @endif
                                @if (file_exists(public_path($path . '.webp')))
                                    <source srcset="{{ asset($path . '.webp') }}" type="image/webp">
                                @endif
                                <img src="{{ asset($path . '.jpg') }}" alt="{{ $alt }}" loading="lazy">
                            </picture>
                        </div>
                        <div class="projects__item-content">
                            <h3 class="projects__item-title">{{ $cardTitle }}</h3>
                            <p class="projects__item-text">{{ $cardText }}</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="projects__btn-container">
                <a href="{{ route('portfolio', app()->getLocale()) }}" class="projects__btn">
                    @lang('home.projects.btn') <span>&rarr;</span>
                </a>
            </div>
        </div>
    </section>
    <section class="same-result">
        <div class="same-result__bg">
            @php
                $name = __('home.photo.15.name');
                $alt = __('home.photo.15.alt');
                $path = 'img/home/' . app()->getLocale() . '/result/' . $name;
            @endphp
            <picture>
                @if (file_exists(public_path($path . '.avif')))
                    <source srcset="{{ asset($path . '.avif') }}" type="image/avif">
                @endif
                @if (file_exists(public_path($path . '.webp')))
                    <source srcset="{{ asset($path . '.webp') }}" type="image/webp">
                @endif
                <img src="{{ asset($path . '.jpg') }}" alt="{{ $alt }}" loading="lazy">
            </picture>
        </div>
        <div class="same-result__container">
            <div class="same-result__content">
                <h2 class="same-result__title title">@lang('home.same-result.title')</h2>
                <p class="same-result__subtitle">@lang('home.same-result.subtitle')</p>
                <div class="same-result__actions">
                    <a href="#quiz" class="same-result__btn btn btn--primary">@lang('home.same-result.btn1')</a>
                    <a href="https://wa.me/" target="_blank" class="same-result__btn btn btn--whatsapp">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.888-.788-1.489-1.761-1.663-2.06-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                        @lang('home.same-result.btn2')
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="what-do-business-get">
        <div class="what-do-business-get__container">
            <h2 class="what-do-business-get__title">@lang('home.what-get.title')</h2>
            <div class="what-do-business-get__items">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="what-do-business-get__item">
                        <div class="what-do-business-get__icon">
                            <img src="{{ asset('img/home/icons/get/' . $i . '.svg') }}" alt="@lang('home.what-get.items.' . $i . '.title')">
                        </div>
                        <h3 class="what-do-business-get__item-title">@lang('home.what-get.items.' . $i . '.title')</h3>
                        <p class="what-do-business-get__item-text">@lang('home.what-get.items.' . $i . '.text')</p>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section id="quizSection" class="quiz">
        <div class="quiz__container quiz-container">
            <h2 class="quiz__title">@lang('home.quiz.title')</h2>
            {{-- <h3 class="quiz__sub-title">@lang('home.quiz.sub-title')</h3> --}}
            <div class="quiz__body quiz-body">
                <div class="quiz-body__overlay"></div>
                <h4 class="quiz-body__title">@lang('home.quiz.body.title')</h4>
                <div class="quiz-body__slider swiper">
                    <div class="swiper-wrapper">
                        @foreach ($quizData as $quiz)
                            <div {!! implode(' ', $quiz['data']) !!} class=" swiper-slide {{ $quiz['class'] ?? null }}">
                                <div class="item-quiz__img">
                                    <img src="{{ asset($quiz[App::currentLocale()]) }}" alt="{{ __($quiz['alt']) }}">
                                </div>
                                <h3 class="item-quiz__title">{{ __($quiz['title']) }}</h3>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="quiz-body__slider-btns">
                    <div class="swiper-button-prev swiper-button">&larr;</div>
                    <div class="swiper-button-next swiper-button">&rarr;</div>
                </div>
                <div class="quiz-body__progres">
                    <div class="quiz-body__progres-line"><span></span></div>
                    <div class="quiz-body__progres-count">@lang('home.quiz.count')</div>
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
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.solution.card.1')
                        </div>
                    </div>
                    <div class="solution__card">
                        <div class="solution__card-img">
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.solution.card.5')
                        </div>
                    </div>
                    <div class="solution__card">
                        <div class="solution__card-img">
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.solution.card.3')
                        </div>
                    </div>
                    <div class="solution__card">
                        <div class="solution__card-img">
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.solution.card.4')
                        </div>
                    </div>
                    <div class="solution__card">
                        <div class="solution__card-img">
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.solution.card.2')
                        </div>
                    </div>
                    <div class="solution__card">
                        <div class="solution__card-img">
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.solution.card.6')
                        </div>
                    </div>
                </div>
                <button type="button" class="show-more-btn active">@lang('home.solution.show_more')</button>
                <div class="solution__free">
                    <div class="solution__free-content">
                        <h3 class="solution__free-text">@lang('home.solution.free.title')</h3>
                        {{-- <a href="/docs/fiwhcd050c.pdf" download>@lang('home.solution.free.btn')</a> --}}
                        <a href="/docs/20-gaid.pdf" download class="solution__free-btn">@lang('home.solution.free.btn')<span
                                class="flare"></span></a>
                    </div>
                    <div class="solution__free-img">
                        <img src="{{ asset('img/home/es/solution/tablet-full.svg') }}" alt="">
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
                                @if (App::isLocale('es'))
                                    <img src="{{ asset('img/home/es/portfolio/Stand-com-esctructura-metalica-con-letras-corporeas-retroiluminadas-para-cervello.webp') }}"
                                        alt="@lang('alt.home.posrtfolio.14')">
                                @elseif(App::isLocale('ru'))
                                    <img src="{{ asset('img/home/ru/portfolio/Уличный-стенд-из-алюминиевой-конструкции-с-обьемныными-световыми-буквами-для-мэрии-сервейо.webp') }}"
                                        alt="@lang('alt.home.posrtfolio.14')">
                                @endif
                            </div>
                            <div class="portfolio-slide__content">
                                <div class="portfolio-slide__text">
                                    <h3 class="portfolio-slide__title">@lang('home.portfolio.slides.14.title')</h3>
                                    <p class="portfolio-slide__description">@lang('home.portfolio.slides.14.text')</p>
                                </div>
                                <div class="portfolio-slide__terms">
                                    <p class="portfolio-slide__terms-title">@lang('home.portfolio.slides.term_title')</p>
                                    <p class="portfolio-slide__term">@lang('home.portfolio.slides.14.term')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slider-portfolio__slide portfolio-slide">
                        <div class="portfolio-slide__body">
                            <div class="portfolio-slide__img">
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
                                @if (App::isLocale('es'))
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
            <div class="portfolio-product__show-more">
                <a class="portfolio-product__show-more-link"
                    href="{{ route('portfolio', ['locale' => __('lang.current')]) }}">@lang('portfolio.show_more')
                    <span>&rarr;</span></a>
            </div>
        </div>
    </section>
    <section class="gift">
        <div class="gift__container">
            <div class="gift__body">
                <div class="gift__content">
                    <div class="gift__img">
                        <img src="{{ asset('img/icons/gift.webp') }}" alt="">
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
                    <img src="{{ asset('img/video.png') }}" alt="">
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
                <div class="solution__cards {{ App::currentLocale() }}">
                    <div class="solution__card">
                        <div class="solution__card-img">
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.result.card.1')
                        </div>
                    </div>
                    <div class="solution__card">
                        <div class="solution__card-img">
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.result.card.2')
                        </div>
                    </div>
                    <div class="solution__card">
                        <div class="solution__card-img">
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.result.card.3')
                        </div>
                    </div>
                    <div class="solution__card">
                        <div class="solution__card-img">
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.result.card.7')
                        </div>
                    </div>
                    <div class="solution__card">
                        <div class="solution__card-img">
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.result.card.8')
                        </div>
                    </div>
                    <div class="solution__card">
                        <div class="solution__card-img">
                            <img src="{{ asset('img/home/es/solution/card.svg') }}" alt="">
                        </div>
                        <div class="solution__card-text">
                            @lang('home.result.card.10')
                        </div>
                    </div>
                </div>
                <button type="button" class="show-more-btn active">@lang('home.result.show_more')</button>
                {{-- <div class="result__slider slider-result swiper">
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
            </div> --}}
            </div>
        </div>

    </section>
    <section id="review" class="review">
        <div id="review-ancor"></div>
        <div class="review__container">
            <div class="review__title">
                @lang('home.reviews.title')
            </div>
            <div class="review__body">
                <div class="review__img">
                    @if (App::isLocale('es'))
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
                                    <div class="review__content-title">@lang('home.reviews.ecotown.name')</div>
                                    <div class="review__content-text">@lang('home.reviews.ecotown.text')</div>
                                </div>
                                <div class="review-slide__body">
                                    <div class="review__content-title">@lang('home.reviews.melanta.name')</div>
                                    <div class="review__content-text">@lang('home.reviews.melanta.text')</div>
                                </div>
                            </div>
                            <div class="swiper-slide slider-review__slide review-slide">
                                <div class="review-slide__body">
                                    <div class="review__content-title">@lang('home.reviews.duo.name')</div>
                                    <div class="review__content-text">@lang('home.reviews.duo.text')</div>
                                </div>
                                <div class="review-slide__body">
                                    <div class="review__content-title">@lang('home.reviews.floratelie.name')</div>
                                    <div class="review__content-text">@lang('home.reviews.floratelie.text')</div>
                                </div>
                            </div>
                            <div class="swiper-slide slider-review__slide review-slide">
                                <div class="review-slide__body">
                                    <div class="review__content-title">@lang('home.reviews.kabakova.name')</div>
                                    <div class="review__content-text">@lang('home.reviews.kabakova.text')</div>
                                </div>
                                <div class="review-slide__body">
                                    <div class="review__content-title">@lang('home.reviews.zubko.name')</div>
                                    <div class="review__content-text">@lang('home.reviews.zubko.text')</div>
                                </div>
                            </div>
                            <div class="swiper-slide slider-review__slide review-slide">
                                <div class="review-slide__body">
                                    <div class="review__content-title">@lang('home.reviews.gas_auto.name')</div>
                                    <div class="review__content-text">@lang('home.reviews.gas_auto.text')</div>
                                </div>
                                <div class="review-slide__body">
                                    <div class="review__content-title">@lang('home.reviews.estetica.name')</div>
                                    <div class="review__content-text">@lang('home.reviews.estetica.text')</div>
                                </div>
                            </div>
                            <div class="swiper-slide slider-review__slide review-slide">
                                <div class="review-slide__body">
                                    <div class="review__content-title">@lang('home.reviews.globos.name')</div>
                                    <div class="review__content-text">@lang('home.reviews.globos.text')</div>
                                </div>
                            </div>
                            <div class="swiper-slide slider-review__slide review-slide">
                                <div class="review-slide__body">
                                    <div class="review__content-title">@lang('home.reviews.bike_parts.name')</div>
                                    <div class="review__content-text">@lang('home.reviews.bike_parts.text')</div>
                                </div>
                                <div class="review-slide__body">
                                    <div class="review__content-title">@lang('home.reviews.detailing.name')</div>
                                    <div class="review__content-text">@lang('home.reviews.detailing.text')</div>
                                </div>
                            </div>
                            <div class="swiper-slide slider-review__slide review-slide">
                                <div class="review-slide__body">
                                    <div class="review__content-title">@lang('home.reviews.li_beauty.name')</div>
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
