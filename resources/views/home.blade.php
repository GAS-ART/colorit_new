@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('mainPopupPayload', 'Главная страница (' . url()->current() . ')')

@section('body_class', 'wide-container-page')

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
    <x-achievements direction="top" />
    <div class="home-clients-projects">
        <x-clients />
        @php
            $projectsItems = [];
            for ($i = 6; $i <= 14; $i++) {
                $projectsItems[] = [
                    'path' => 'img/home/' . app()->getLocale() . '/projects/' . __('home.photo.' . $i . '.name'),
                    'alt' => __('home.photo.' . $i . '.alt'),
                    'title' => __('home.photo.' . $i . '.title'),
                    'text' => __('home.photo.' . $i . '.text'),
                ];
            }
        @endphp
        <x-projects :title="__('home.projects.title')" :subtitle="__('home.projects.subtitle')" :items="$projectsItems" />
    </div>
    <x-same-result :title="__('home.same-result.title')" :subtitle="__('home.same-result.subtitle')" :image="'img/home/' . app()->getLocale() . '/result/' . __('home.photo.15.name')" :alt="__('home.photo.15.alt')"
        objectPosition="center calc(50% - var(--pos-y, 0px))" />
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

    <section class="reviews">
        <div class="reviews__container">
            <h2 class="reviews__title">@lang('home.reviews.title')</h2>
            <div class="reviews__slider-wrapper">
                <button class="reviews__btn-prev" aria-label="Previous review">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 12H4M4 12L10 6M4 12L10 18" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="reviews__slider swiper">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 8; $i++)
                            <div class="swiper-slide">
                                <div class="reviews__card">
                                    <div class="reviews__card-header">
                                        <div class="reviews__avatar">
                                            <picture>
                                                @if (file_exists(public_path('img/home/reviews/' . $i . '.avif')))
                                                    <source srcset="{{ asset('img/home/reviews/' . $i . '.avif') }}"
                                                        type="image/avif">
                                                @endif
                                                @if (file_exists(public_path('img/home/reviews/' . $i . '.webp')))
                                                    <source srcset="{{ asset('img/home/reviews/' . $i . '.webp') }}"
                                                        type="image/webp">
                                                @endif
                                                @if (file_exists(public_path('img/home/reviews/' . $i . '.jpg')))
                                                    <img src="{{ asset('img/home/reviews/' . $i . '.jpg') }}"
                                                        alt="@lang('home.reviews.items.' . $i . '.name')" loading="lazy">
                                                @endif
                                            </picture>
                                        </div>
                                        <div class="reviews__info">
                                            <span class="reviews__name">@lang('home.reviews.items.' . $i . '.name')</span>
                                            <span
                                                class="reviews__date">{{ \Carbon\Carbon::parse(__('home.reviews.items.' . $i . '.date'))->locale(app()->getLocale())->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                    <div class="reviews__stars">
                                        @for ($s = 0; $s < 5; $s++)
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 1.66669L12.575 6.88335L18.3333 7.72502L14.1667 11.7834L15.15 17.5167L10 14.8084L4.85 17.5167L5.83333 11.7834L1.66667 7.72502L7.425 6.88335L10 1.66669Z"
                                                    fill="#F2C94C" />
                                            </svg>
                                        @endfor
                                    </div>
                                    <p class="reviews__text">@lang('home.reviews.items.' . $i . '.text')</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <button class="reviews__btn-next" aria-label="Next review">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <a href="https://www.google.com/maps/place/Rotulos+Colorit/@41.4825902,2.3260131,17z/data=!4m18!1m9!3m8!1s0x12a4a3991ef4d9f5:0x230495fb4c081c89!2sRotulos+Colorit!8m2!3d41.4825902!4d2.3260131!9m1!1b1!16s%2Fg%2F11pyvpg9q9!3m7!1s0x12a4a3991ef4d9f5:0x230495fb4c081c89!8m2!3d41.4825902!4d2.3260131!9m1!1b1!16s%2Fg%2F11pyvpg9q9!5m2!1e2!1e4?entry=ttu&g_ep=EgoyMDI2MDcxNS4wIKXMDSoASAFQAw%3D%3D"
                target="_blank" rel="noopener noreferrer" class="reviews__google-link"
                title="{{ __('reviews.google_link_title') }}">
                <svg class="reviews__google-icon" viewBox="0 0 24 24" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.35 11.1h-9.17v2.73h6.51c-.33 3.81-3.5 5.44-6.5 5.44C8.36 19.27 5 16.25 5 12c0-4.1 3.2-7.27 7.2-7.27 3.09 0 4.9 1.97 4.9 1.97L19 4.72S16.56 2 12.1 2C6.42 2 2.03 6.8 2.03 12c0 5.05 4.13 10 10.22 10 5.35 0 9.25-3.67 9.25-9.09 0-1.15-.15-1.81-.15-1.81z" />
                </svg>
                <span>
                    {{ __('reviews.google_rating', ['rating' => '4.9', 'count' => '79']) }}
                </span>
            </a>
        </div>
    </section>

    <!-- SEO: Мікророзмітка для роботів -->
    <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "LocalBusiness",
  "name": "Rotulos Colorit",
  "image": "{{ asset('img/logo.png') }}", 
  "url": "{{ url('/') }}",
  "telephone": "{{ __('main.phone') }}",
  "priceRange": "€€",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Republica Argentina 7, 1B",
    "addressLocality": "Masnou, Barcelona",
    "postalCode": "08320",
    "addressCountry": "ES"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "79",
    "bestRating": "5",
    "worstRating": "1"
  },
  "review": [
    @for ($i = 1; $i <= 8; $i++)
    {
      "@type": "Review",
      "author": {
        "@type": "Person",
        "name": "{{ __('home.reviews.items.' . $i . '.name') }}"
      },
      "datePublished": "{{ __('home.reviews.items.' . $i . '.date') }}",
      "reviewBody": @json(__('home.reviews.items.' . $i . '.text')),
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5", 
        "worstRating": "1"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Google Maps"
      }
    }{{ $i < 8 ? ',' : '' }}
    @endfor
  ]
}
</script>


    <x-faq :questions="__('home.questions')" />

    <x-proposition :title="__('home.proposition.title')" :subtitle="__('home.proposition.subtitle')" :image="'img/home/' . app()->getLocale() . '/proposition/' . __('home.photo.16.name')" :alt="__('home.photo.16.alt')" :footnote="__('home.proposition.footnote')" />

    <x-question-lead>
        ГЛАВНАЯ СТРАНИЦА ({{ url()->current() }})
    </x-question-lead>
@endsection
