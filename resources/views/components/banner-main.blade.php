@props([
    'imageDesktop',
    'imageMobile' => null,
    'imageAlt' => '',
])

@php
    $imageMobile = $imageMobile ?? $imageDesktop . '-mobile';
@endphp

<section class="banner-main">
    <div class="banner-main__bg">
        <picture>
            <!-- MOBILE AVIF -->
            @if (file_exists(public_path($imageMobile . '.avif')))
                <source media="(max-width: 767.98px)" type="image/avif"
                    srcset="{{ asset($imageMobile . '.avif') }}">
            @endif

            <!-- MOBILE WebP -->
            @if (file_exists(public_path($imageMobile . '.webp')))
                <source media="(max-width: 767.98px)" type="image/webp"
                    srcset="{{ asset($imageMobile . '.webp') }}">
            @endif

            <!-- MOBILE JPG -->
            @if (file_exists(public_path($imageMobile . '.jpg')))
                <source media="(max-width: 767.98px)" type="image/jpeg"
                    srcset="{{ asset($imageMobile . '.jpg') }}">
            @endif

            <!-- DESKTOP AVIF -->
            @if (file_exists(public_path($imageDesktop . '.avif')))
                <source media="(min-width: 768px)" type="image/avif"
                    srcset="{{ asset($imageDesktop . '.avif') }}">
            @endif

            <!-- DESKTOP WebP -->
            @if (file_exists(public_path($imageDesktop . '.webp')))
                <source media="(min-width: 768px)" type="image/webp"
                    srcset="{{ asset($imageDesktop . '.webp') }}">
            @endif

            <!-- DESKTOP FALLBACK JPG -->
            <img src="{{ asset($imageDesktop . '.jpg') }}"
                alt="{{ $imageAlt }}" loading="eager">
        </picture>
    </div>
    <div class="banner-main__container">
        <div class="banner-main__content">
            <h1 class="banner-main__title">{{ $title }}</h1>
            <p class="banner-main__subtitle">{{ $subtitle }}</p>
            <div class="banner-main__actions">
                <button data-popup-id="main"
                    class="banner-main__btn banner-main__btn--purple link-on-popup">@lang('expos.stands.banner.btn1')</button>
                <a href="https://wa.me/34695804020" target="_blank"
                    class="banner-main__btn banner-main__btn--green whatsapp-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20.5266 3.46824C18.2575 1.19827 15.2407 0 12.0298 0C5.38547 0 0 5.3883 0 12.0366C0 14.1611 0.553959 16.2307 1.61168 18.0631L0.0163574 23.8887L5.97541 22.3259C7.74208 23.284 9.8524 23.7915 12.023 23.7915H12.0309C18.673 23.7915 24.062 18.4043 24.062 11.7583C24.062 8.53982 22.8105 5.51866 20.5266 3.46824ZM12.0309 21.777C10.2229 21.777 8.46821 21.2917 6.9458 20.3887L6.58661 20.1764L3.04273 21.1051L3.98801 17.652L3.75471 17.2818C2.76007 15.6983 2.23555 13.8967 2.23555 12.0354C2.23555 6.64333 6.62319 2.25344 12.0366 2.25344C14.6467 2.25344 17.1005 3.26945 18.9443 5.11545C20.787 6.96032 21.8019 9.41409 21.8019 12.0264C21.8019 17.4173 17.4143 21.777 12.0309 21.777ZM17.4063 14.4287C17.1118 14.2813 15.6601 13.5658 15.3899 13.4683C15.1186 13.3707 14.9224 13.3219 14.7262 13.6163C14.5301 13.9107 13.9894 14.5492 13.8183 14.7453C13.6461 14.9415 13.4749 14.9664 13.1804 14.819C12.8859 14.6716 11.932 14.3607 10.8037 13.3546C9.92582 12.5714 9.33328 11.609 9.16215 11.3146C8.99103 11.0202 9.14397 10.8606 9.29237 10.7145C9.4249 10.5843 9.5824 10.3758 9.72979 10.2045C9.87717 10.0321 9.92595 9.90906 10.0249 9.71295C10.1228 9.51684 10.0739 9.34468 10.0007 9.19728C9.92742 9.04988 9.33894 7.6025 9.09355 7.01358C8.85382 6.44075 8.61066 6.51884 8.43503 6.511C8.26629 6.50317 8.07009 6.50204 7.87389 6.50204C7.67769 6.50204 7.35848 6.57564 7.08836 6.87005C6.81825 7.16447 6.03362 7.89984 6.03362 9.39521C6.03362 10.8906 7.11281 12.3369 7.2602 12.533C7.40759 12.7292 9.3951 15.8202 12.4344 17.1293C13.1565 17.4405 13.7214 17.6264 14.1673 17.7681C14.8927 17.9986 15.5583 17.966 16.0827 17.8863C16.671 17.7966 17.9152 17.1352 18.1853 16.3998C18.4554 15.6644 18.4554 15.0269 18.3821 14.8795C18.3088 14.7321 18.1126 14.6345 17.8181 14.4871"
                            fill="currentColor" />
                    </svg>
                    @lang('expos.stands.banner.btn2')
                </a>
            </div>
            <p class="banner-main__footer-text">@lang('expos.stands.banner.footer_text')</p>
        </div>
    </div>
    @if (isset($categories))
        <div class="banner-main__categories">
            {{ $categories }}
        </div>
    @endif
</section>
