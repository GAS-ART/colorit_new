<section class="question-lead">
  <div class="question-lead__container">
    <div class="question-lead__body">
      <div class="question-lead__content">
        <h2 class="question-lead__title">@lang('home.question-lead.title')</h2>
        <p class="question-lead__text">@lang('home.question-lead.text')</p>
      </div>
      <button data-popup-id="main" {!! Request::is('/') || Request::is('ru') ? '' : 'data-popup-show-select=""' !!}
        data-popup-payload="{{ $slot }}" class="question-lead__btn link-on-popup">
        @lang('home.question-lead.btn')<span class="flare white"></span>
      </button>
    </div>
  </div>
</section>