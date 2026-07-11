@props(['title', 'cards', 'bgColor' => 'white'])

<section class="work work--bg-{{ $bgColor }}">
    <div class="work__container">
        <h2 class="work__title">{{ $title }}</h2>

        <div class="work__body">
            {{-- Cards row --}}
            <div class="work__cards">
                @foreach ($cards as $index => $card)
                    <div class="work__card @if (!empty($card['description'])) work__card--has-desc @endif">
                        {{-- Timeline connector (absolute, relative to card) --}}
                        <div class="work__connector">
                            @if ($index === 1)
                                <div class="work__line work__line--first"></div>
                            @else
                                <div class="work__line work__line--middle"></div>
                            @endif
                            <div class="work__dot"></div>
                            @if ($index === count($cards))
                                <div class="work__line work__line--last"></div>
                            @else
                                <div class="work__line work__line--middle"></div>
                            @endif
                        </div>

                        <div class="work__card-number">{{ $card['number'] }}</div>
                        <div class="work__card-content">
                            <div class="work__card-text">{{ $card['text'] }}</div>
                            @if (!empty($card['description']))
                                <div class="work__card-desc">{!! $card['description'] !!}</div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
