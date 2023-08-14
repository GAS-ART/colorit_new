<section class="one-image">
  <div class="one-image__container">
    <div class="one-image__body">
      <div class="one-image__content">
        <div class="one-image__title">@lang($data['title'])</div>
        <div class="one-image__text">@lang($data['text'])</div>
      </div>
      <div class="one-image__img">
        <img src="{{ asset($data[App::currentLocale()]) }}" alt="@lang($data['alt'])">
      </div>
    </div>
  </div>
</section>