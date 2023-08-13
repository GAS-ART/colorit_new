<section class="two-images">
  <div class="two-images__container">
    <div class="two-images__body">
      <h2 class="two-images__title">{{__($data['title'])}}</h2>
      <h3 class="two-images__text">{{__($data['text'])}}</h3>
      <div class="two-images__img-body">
        @foreach($data['img'] as $item)
        <div class="two-images__img">
          <img src="{{ asset($item[App::currentLocale()]) }}" alt="{{__($item['alt'])}}">
          <h4 class="two-images__img-title">{{__($item['img_title'])}}</h4>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>