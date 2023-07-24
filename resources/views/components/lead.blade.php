<section class="lead">
  <div class="lead__container">
    <div class="lead__body">
      <div class="lead__img">
        <img src="{{asset('img/icons/phone.svg')}}" alt="">
      </div>
      <div class="lead__content">
        <h2 class="lead__title">{{ $title }}</h2>
        <p class="lead__text">{{ $text }}</p>
      </div>
      <div class="lead__action">
        <button data-popup-id="main" data-popup-show-select="" data-popup-payload="{{ $leadInfo }}"
          class="lead__btn link-on-popup">@lang('letters.lead.btn')<span class="flare white"></span></button>
      </div>
    </div>
  </div>
</section>