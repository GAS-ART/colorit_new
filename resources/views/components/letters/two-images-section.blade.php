@php $locale = app()->getLocale(); @endphp

<section class="letters-2-images">
  <div class="letters-2-images__container">
    <div class="letters-2-images__body">
      <h2 class="letters-2-images__title">{{__($data['title'])}}</h2>
      <h3 class="letters-2-images__text">{{__($data['text'])}}</h3>
      <div class="letters-2-images__img-body">
        @foreach($data['img'] as $item)
        <div class="letters-2-images__img">
          <img src="{{ asset($item[$locale]) }}" alt="{{__($item['alt'])}}">
          <h4 class="letters-2-images__img-title">{{__($item['img_title'])}}</h4>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>