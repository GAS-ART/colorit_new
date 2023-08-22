<section class="advantages" style="background-image: url('{{$advantages['background_img']}}');">
  <h2 class="advantages__title">
    @lang($advantages['title'])
  </h2>
  <div class="advantages__container">
    <div class="advantages__cards">
      @foreach($advantages['cards'] as $card)
      <div class="advantages__card">
        <div class="advantages__card-img">
          <img src="{{asset($card['img'])}}" alt="">
        </div>
        <h4 class="advantages__card-title">@lang($card['title'])</h4>
        <p class="advantages__card-text">@lang($card['text'])</p>
      </div>
      @endforeach
    </div>
  </div>
</section>