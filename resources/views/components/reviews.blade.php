@props([
    'reviews' => [],
    'title' => '',
    'averageRating' => '4.8',
    'totalReviews' => '79',
    'googleLink' =>
        'https://www.google.com/maps/place/Rotulos+Colorit/@41.4825902,2.3260131,17z/data=!4m18!1m9!3m8!1s0x12a4a3991ef4d9f5:0x230495fb4c081c89!2sRotulos+Colorit!8m2!3d41.4825902!4d2.3260131!9m1!1b1!16s%2Fg%2F11pyvpg9q9!3m7!1s0x12a4a3991ef4d9f5:0x230495fb4c081c89!8m2!3d41.4825902!4d2.3260131!9m1!1b1!16s%2Fg%2F11pyvpg9q9!5m2!1e2!1e4?entry=ttu&g_ep=EgoyMDI2MDcxNS4wIKXMDSoASAFQAw%3D%3D',
    'businessName' => 'Colorit Agency',
])

@php
    $reviews = is_array($reviews) ? $reviews : [];
    $title = $title ?: __('reviews.section_title');
@endphp

@if (count($reviews) > 0)
    <section class="reviews">
        <div class="reviews__container">
            {{-- Header: title + Google link --}}
            <div class="reviews__header">
                <h2 class="reviews__title">{!! $title !!}</h2>
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

            {{-- Swiper slider --}}
            <div class="reviews__slider-wrapper">
                <div class="reviews__slider swiper">
                    <div class="swiper-wrapper">
                        @foreach ($reviews as $review)
                            @if (is_array($review))
                                <div class="swiper-slide">
                                    <div class="reviews__card">
                                        <div class="reviews__card-top">
                                            {{-- Author avatar placeholder --}}
                                            <div class="reviews__avatar">
                                                {{ mb_substr($review['author'] ?? '', 0, 1) }}
                                            </div>
                                            <div class="reviews__author-info">
                                                <div class="reviews__author">{{ $review['author'] ?? '' }}</div>
                                                <div class="reviews__date">
                                                    {{ \Carbon\Carbon::parse($review['date'] ?? now())->format('d.m.Y') }}
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Star rating --}}
                                        <div class="reviews__stars"
                                            aria-label="{{ __('reviews.rating_aria') }}: {{ $review['rating'] ?? 5 }} / 5">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <span
                                                    class="reviews__star {{ $i <= ($review['rating'] ?? 5) ? 'reviews__star--filled' : 'reviews__star--empty' }}">★</span>
                                            @endfor
                                        </div>

                                        {{-- Review text --}}
                                        <div class="reviews__text">
                                            <p>{{ $review['text'] ?? '' }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                {{-- Navigation buttons --}}
                <div class="reviews__nav">
                    <div class="reviews__btn-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="reviews__btn-next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SEO: JSON-LD structured data --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "LocalBusiness",
      "name": "{{ $businessName }}",
      "image": "{{ asset('images/logo.png') }}",
      "url": "{{ url('/') }}",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "{{ $averageRating }}",
        "reviewCount": "{{ $totalReviews }}",
        "bestRating": "5",
        "worstRating": "1"
      },
      "review": [
        @foreach($reviews as $review)
          @if(is_array($review))
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name": @json($review['author'] ?? '')
          },
          "datePublished": "{{ \Carbon\Carbon::parse($review['date'] ?? now())->toDateString() }}",
          "reviewBody": @json($review['text'] ?? ''),
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "{{ $review['rating'] ?? 5 }}",
            "worstRating": "1"
          },
          "publisher": {
            "@type": "Organization",
            "name": "Google Maps"
          }
        }{{ $loop->last ? '' : ',' }}
          @endif
        @endforeach
      ]
    }
    </script>
@endif
