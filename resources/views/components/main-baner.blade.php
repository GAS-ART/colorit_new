<section class="main">
  <div class="main__baner">
    <h1 class="main__baner--title-service"><span>{{ $baner['title'] }}</span></h1>
    <picture>
      @if(App::isLocale('es'))
      <source type="image/webp" srcset="{{ asset($baner['es']['imgBig']) }}" media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset($baner['es']['imgMin']) }}">
      @elseif(App::isLocale('ru'))
      <source type="image/webp" srcset="{{ asset($baner['ru']['imgBig']) }}" media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset($baner['ru']['imgMin']) }}">
      @endif
      @if(App::isLocale('es'))
      <img src="{{ asset($baner['es']['imgBig']) }}" alt="{{ $baner['alt'] }}">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset($baner['ru']['imgMin']) }}" alt="{{ $baner['alt'] }}">
      @endif
    </picture>
    <div class="main__circle">
      <div class="main__circle--content">{{ $baner['circle_text'] }}</div>
      <div class="main__circle--small"></div>
      <div class="main__circle--big"></div>
    </div>
  </div>
</section>