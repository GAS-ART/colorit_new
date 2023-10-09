<section class="questions">
  <div class="questions__container">
    <div class="questions__body">
      <div class="questions__img">
        <img src="{{asset('img/icons/question.svg')}}" alt="">
      </div>
      <div class="questions__content content-questions">
        <h2 class="content-questions__title">@lang('home.questions.title')</h2>
        <div class="content-questions__body">
          @foreach($questions as $question)
          <div class="content-questions__card">
            <div class="content-questions__question">@lang($question['question'])
            </div>
            <div class="content-questions__answer">@lang($question['answer'])</div>
            <div class="content-questions__arrow">
              <div></div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

@once
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    @foreach($questions as $question)
      {
        "@type": "Question",
        "name": "{{ str_replace(['\\\'', '\\"', '"', '\''], '', preg_replace('/<[^>]+>/', '', preg_replace('/\s+/', ' ', addslashes(__($question['question']))))) }}",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "{{ str_replace(['\\\'', '\\"', '"', '\''], '', preg_replace('/<[^>]+>/', '', preg_replace('/\s+/', ' ', addslashes(__($question['answer']))))) }}"
        }
      }{{ $loop->last ? '' : ',' }}
    @endforeach
  ]
}
</script>
@endonce