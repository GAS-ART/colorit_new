<section class="five-image">
  <div class="five-image__container">
    <h2 class="five-image__title">@lang($data['title'])</h2>
    <p class="five-image__text">@lang($data['text'])</p>
    <div class="five-image__img-row">
      @foreach ($data['images'] as $img)
      <div class="five-image__img-body">
        <div class="five-image__img-item">
          <img src="{{ asset($img[App::currentLocale()]) }}" alt="@lang($img['alt'])">
        </div>
        <h3 class="five-image__img-title">@lang($img['title'])</h3>
      </div>
      @endforeach
    </div>
  </div>
</section>