<section class="two-images">
  <div class="two-images__container">
    <div class="two-images__body">
      <h2 class="two-images__title">@lang($data['title'])</h2>
      <h3 class="two-images__text">@lang($data['text'])</h3>
      <div class="two-images__img-body @isset($data['height']){{$data['height']}}@endisset" >
        @foreach($data['img'] as $item)
        <div class="two-images__img">
          <img src="{{ asset($item[App::currentLocale()]) }}" alt="@lang($item['alt'])">
          <h4 class="two-images__img-title">@lang($item['img_title'])</h4>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>