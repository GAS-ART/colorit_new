@props(['title', 'subtitle' => null, 'items' => [], 'bgColor' => 'white'])

<section class="projects projects--bg-{{ $bgColor }}">
    <div class="projects__container">
        <h2 class="projects__title">{!! $title !!}</h2>
        @if ($subtitle)
            <p class="projects__subtitle">{!! $subtitle !!}</p>
        @endif
        <div class="projects__items">
            @foreach ($items as $item)
                @php
                    $path = $item['path'] ?? '';
                    $alt = $item['alt'] ?? '';
                    $cardTitle = $item['title'] ?? '';
                    $cardText = $item['text'] ?? '';
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
                        <h3 class="projects__item-title">{!! $cardTitle !!}</h3>
                        <p class="projects__item-text">{!! $cardText !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="projects__btn-container">
            <a href="{{ route('portfolio', app()->getLocale()) }}" class="projects__btn">
                @lang('home.projects.btn')
            </a>
        </div>
    </div>
</section>
