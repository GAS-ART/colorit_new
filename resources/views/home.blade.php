@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('mainPopupPayload', 'Главная страница (' . url()->current() . ')')

@section('body_class', 'wide-container-page')

@section('content')


    <x-banner-main :image-desktop="'img/home/' . app()->getLocale() . '/' . __('home.photo.1.name') . '-desktop'" :image-alt="__('alt.home.baner_icon')">
        <x-slot:title>
            {!! __('home.main.title') !!}
        </x-slot:title>
        <x-slot:subtitle>
            {!! __('home.main.subtitle') !!}
        </x-slot:subtitle>
    </x-banner-main>


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

    <section id="review" class="reviews">
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
