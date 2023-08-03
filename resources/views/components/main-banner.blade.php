<section class="main-banner">
  <div class="main-banner__banner">
    <h1 class="main-banner__banner--title"><span>{{__($banner['title'])}}</span></h1>
    <picture>
      <source type="image/webp" srcset="{{ asset($banner[App::currentLocale()]['imgBig']) }}"
        media="(min-width: 768px)">
      <source type="image/webp" srcset="{{ asset($banner[App::currentLocale()]['imgMin']) }}">
      <img src="{{ asset($banner[App::currentLocale()]['imgBig']) }}" alt="{{ __($banner['alt']) }}">
    </picture>
    <div class="main-banner__circle">
      <div class="main-banner__circle--content">{{ __($banner['circle_text']) }}</div>
      <div class="main-banner__circle--small"></div>
      <div class="main-banner__circle--big"></div>
    </div>
  </div>
</section>