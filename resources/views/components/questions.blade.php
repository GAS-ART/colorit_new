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
            <div class="content-questions__question">{{$question['question']}}
            </div>
            <div class="content-questions__answer">{{$question['answer']}}</div>
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