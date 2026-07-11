@props([
    'title' => null,
    'count' => 3,
    'icons' => [],
    'advantages' => [],
    'background' => null,
])

<section class="new-advantages @if ($background) {{ $background }} @endif">
    <div class="new-advantages__container">
        @if ($title)
            <h2 class="new-advantages__main-title">{!! $title !!}</h2>
        @endif
        <div class="new-advantages__body new-advantages__body--count-{{ $count }}">
            @foreach ($advantages as $key => $advantage)
                @if ($loop->iteration > $count)
                    @break
                @endif
                <div class="new-advantages__card">
                    <div class="new-advantages__icon">
                        <img src="{{ asset($icons[$key] ?? ($icons[$loop->index] ?? '')) }}"
                            alt="{{ $advantage['title'] ?? '' }}">
                    </div>
                    @if (!empty($advantage['title']))
                        <h3 class="new-advantages__title">{{ $advantage['title'] }}</h3>
                    @endif
                    @if (!empty($advantage['text']))
                        <p class="new-advantages__text">{{ $advantage['text'] }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
