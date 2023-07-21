<section class="main">
  <div class="main__baner">
    <h1 class="main__baner--title-service"><span>{{__($baner['title'])}}</span></h1>
    <picture>
      <source type="image/webp" srcset="{{ asset($baner[App::currentLocale()]['imgBig']) }}" media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset($baner[App::currentLocale()]['imgMin']) }}">
      <img src="{{ asset($baner[App::currentLocale()]['imgBig']) }}" alt="{{ __($baner['alt']) }}">
    </picture>
    <div class="main__circle">
      <div class="main__circle--content">{{ __($baner['circle_text']) }}</div>
      <div class="main__circle--small"></div>
      <div class="main__circle--big"></div>
    </div>
  </div>
</section>