<section class="main-baner">
  <div class="main-baner__baner">
    <h1 class="main-baner__baner--title"><span>{{__($baner['title'])}}</span></h1>
    <picture>
      <source type="image/webp" srcset="{{ asset($baner[App::currentLocale()]['imgBig']) }}" media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset($baner[App::currentLocale()]['imgMin']) }}">
      <img src="{{ asset($baner[App::currentLocale()]['imgBig']) }}" alt="{{ __($baner['alt']) }}">
    </picture>
    <div class="main-baner__circle">
      <div class="main-baner__circle--content">{{ __($baner['circle_text']) }}</div>
      <div class="main-baner__circle--small"></div>
      <div class="main-baner__circle--big"></div>
    </div>
  </div>
</section>