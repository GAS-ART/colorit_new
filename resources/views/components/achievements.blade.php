@props([
    'direction' => 'top',
    /** @var 'white'|'grey' $bgColor */
    'bgColor' => 'white',
    /** @var 'white'|'grey' $bgColorMobile */
    'bgColorMobile' => 'white',
])

<section
    class="achievements achievements--line-{{ $direction }} achievements--bg-desktop-{{ $bgColor }} achievements--bg-mobile-{{ $bgColorMobile }}">
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
