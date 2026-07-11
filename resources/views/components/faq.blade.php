@props([
    'title' => 'FAQ',
    'questions' => []
])

<section class="faq">
    <div class="faq__container">
        <h2 class="faq__title">{!! $title !!}</h2>
        <div class="faq__list">
            @foreach ($questions as $item)
                @if (is_array($item))
                    <div class="faq__item">
                        <button class="faq__question" type="button">
                            <span class="faq__question-text">{!! $item['question'] ?? ($item['title'] ?? '') !!}</span>
                            <span class="faq__icon"></span>
                        </button>
                        <div class="faq__answer">
                            <div class="faq__answer-inner">
                                {!! $item['answer'] ?? ($item['text'] ?? '') !!}
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
