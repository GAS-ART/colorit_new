@section('header')
<header id="header" class="header">
   <div class="header__wrapper">
      <div class="header__top">
         <div class="header__body">
            <div class="header__content">
               <div class="header__logo">
                  <a href="{{ route('home', ['locale' => __('lang.current')]) }}">
                     <img src="{{ asset('img/colorit-logo.svg') }}" alt="">
                  </a>
               </div>
               <h2>@lang('header.title')</h2>
            </div>
            <div class="header__info info-header">
               <div class="info-header__contacts">
                  <a class="info-header__contacts-phone" href="tel:%2B34691820317">+34 691 820 317</a>
                  <p class="info-header__contacts-text">@lang('main.time')</p>
               </div>
               <div class="info-header__icons">
                  <div class="info-header__icon">
                     <a href="https://www.facebook.com/colorit.agency">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                           <path
                              d="M6.07934 15.9688H3.51207C3.08325 15.9688 2.73442 15.6206 2.73442 15.1926V9.41333H1.23663C0.80781 9.41333 0.458984 9.06506 0.458984 8.63721V6.16077C0.458984 5.73279 0.80781 5.38464 1.23663 5.38464H2.73442V4.14453C2.73442 2.91492 3.12129 1.86877 3.85306 1.11938C4.58814 0.366577 5.61542 -0.03125 6.82383 -0.03125L8.78176 -0.0280762C9.20984 -0.0273437 9.55805 0.320801 9.55805 0.748047V3.04736C9.55805 3.47534 9.20935 3.82349 8.78066 3.82349L7.46241 3.82398C7.06038 3.82398 6.95801 3.90442 6.93611 3.92908C6.90003 3.96997 6.8571 4.08557 6.8571 4.40479V5.38452H8.68159C8.81894 5.38452 8.95201 5.41834 9.06637 5.48206C9.31307 5.61963 9.46644 5.87976 9.46644 6.16089L9.46547 8.63733C9.46547 9.06506 9.11664 9.41321 8.68783 9.41321H6.8571V15.1926C6.8571 15.6206 6.50815 15.9688 6.07934 15.9688ZM3.67425 15.0308H5.91715V8.99341C5.91715 8.70764 6.15015 8.47522 6.43636 8.47522H8.52564L8.5265 6.32263H6.43623C6.15003 6.32263 5.91715 6.09021 5.91715 5.80444V4.40479C5.91715 4.03833 5.95446 3.62158 6.23161 3.30835C6.56649 2.92969 7.09426 2.88599 7.46216 2.88599L8.61823 2.8855V0.909668L6.8231 0.906738C4.88107 0.906738 3.67425 2.14746 3.67425 4.14453V5.80444C3.67425 6.09009 3.44137 6.32263 3.15517 6.32263H1.39881V8.47522H3.15517C3.44137 8.47522 3.67425 8.70764 3.67425 8.99341V15.0308Z"
                              fill="#17161A" />
                        </svg>
                     </a>

                  </div>
                  <div class="info-header__icon">
                     <a href="https://www.instagram.com/colorit.agency/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                           <g clip-path="url(#clip0_71_446)">
                              <path
                                 d="M8.00182 3.892C5.73315 3.892 3.89648 5.73067 3.89648 7.99733C3.89648 10.266 5.73515 12.1027 8.00182 12.1027C10.2705 12.1027 12.1072 10.264 12.1072 7.99733C12.1072 5.72867 10.2685 3.892 8.00182 3.892ZM8.00182 10.662C6.52915 10.662 5.33715 9.46933 5.33715 7.99733C5.33715 6.52533 6.52982 5.33267 8.00182 5.33267C9.47382 5.33267 10.6665 6.52533 10.6665 7.99733C10.6672 9.46933 9.47448 10.662 8.00182 10.662Z"
                                 fill="#17161A" />
                              <path
                                 d="M11.2988 0.0508967C9.82682 -0.0177699 6.18082 -0.0144366 4.70749 0.0508967C3.41282 0.111563 2.27082 0.42423 1.35015 1.3449C-0.188515 2.88356 0.00815151 4.9569 0.00815151 7.99756C0.00815151 11.1096 -0.165182 13.1349 1.35015 14.6502C2.89482 16.1942 4.99815 15.9922 8.00282 15.9922C11.0855 15.9922 12.1495 15.9942 13.2395 15.5722C14.7215 14.9969 15.8402 13.6722 15.9495 11.2929C16.0188 9.82023 16.0148 6.1749 15.9495 4.70156C15.8175 1.8929 14.3102 0.189563 11.2988 0.0508967ZM13.6288 13.6322C12.6202 14.6409 11.2208 14.5509 7.98349 14.5509C4.65015 14.5509 3.31348 14.6002 2.33815 13.6222C1.21482 12.5042 1.41815 10.7089 1.41815 7.9869C1.41815 4.30356 1.04015 1.6509 4.73682 1.46156C5.58615 1.43156 5.83615 1.42156 7.97415 1.42156L8.00415 1.44156C11.5568 1.44156 14.3442 1.06956 14.5115 4.76556C14.5495 5.6089 14.5582 5.86223 14.5582 7.9969C14.5575 11.2916 14.6202 12.6362 13.6288 13.6322Z"
                                 fill="#17161A" />
                              <path
                                 d="M12.2699 4.68933C12.7997 4.68933 13.2292 4.25982 13.2292 3.73C13.2292 3.20017 12.7997 2.77067 12.2699 2.77067C11.7401 2.77067 11.3105 3.20017 11.3105 3.73C11.3105 4.25982 11.7401 4.68933 12.2699 4.68933Z"
                                 fill="#17161A" />
                           </g>
                           <defs>
                              <clipPath id="clip0_71_446">
                                 <rect width="16" height="16" fill="white" />
                              </clipPath>
                           </defs>
                        </svg>
                     </a>
                  </div>
               </div>
               <div class="header__options">

                  <div class="header__actions">
                     <!--Для выпадающего списка языков-->
                     <div class="header__language language-btn">
                        <div class="language-btn__select">
                           <a class="language-btn__link @lang('lang.current')"
                              href="{{ route('locale', __('lang.current')) }}">
                              <div class="language-btn__text">@lang('lang.current')</div>
                              <div class="language-btn__icon @lang('lang.current')"></div>
                           </a>
                        </div>
                        <div class="language-btn__select">
                           <a class="language-btn__link" href="{{ route('locale', __('lang.another')) }}">
                              <div class="language-btn__text">@lang('lang.another')</div>
                              <div class="language-btn__icon @lang('lang.another')"></div>
                           </a>
                        </div>
                     </div>
                     <!--Для выпадающего списка языков-->
                  </div>
               </div>
               <button data-popup-id="main" data-popup-payload="@yield('mainPopupPayload')"
                  class="info-header__lead link-on-popup">
                  @lang('header.lead')<span class="flare-header"></span>
               </button>
               </button>
               <div class="info-header__menu">
                  <span></span>
               </div>
            </div>
         </div>
      </div>
      <div class="header__bottom">
         <div class="header__container">
            <nav class="header-menu">
               <ul class="header-menu__list">
                  <li class="header-menu__list-item">
                     <h3 class="header-menu__title">@lang('main.menu.signboards.title')</h3>
                     <ul class="header-menu__sub-list">
                        <li class="header-menu__sub-list-item @yield('signboards_whithout_light')">
                           <a href="{{ route('signboards_whithout_light', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.signboards.whithout_light')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('signboards_whith_light')">
                           <a href="{{ route('signboards_whith_light', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.signboards.whith_light')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('lightbox')">
                           <a href="{{ route('lightbox', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.signboards.lightbox')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('side_box')">
                           <a href="{{ route('side_box', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.signboards.side_box')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('neon')">
                           <a href="{{ route('neon', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.signboards.neon')
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="header-menu__list-item">
                     <h3 class="header-menu__title">@lang('main.menu.letters.title')
                     </h3>
                     <ul class="header-menu__sub-list">
                        <li class="header-menu__sub-list-item @yield('letters_whithout_light')">
                           <a href="{{ route('letters_without_light', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.letters.whithout_light')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('letters_whith_light')">
                           <a href="{{ route('letters_with_light', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.letters.whith_light')
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="header-menu__list-item">
                     <h3 class="header-menu__title">@lang('main.menu.vinyl.title')</h3>
                     <ul class="header-menu__sub-list">
                        <li class="header-menu__sub-list-item @yield('vinyl_regular')">
                           <a href="{{ route('vinyl_regular', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.vinyl.regular')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('vinyl_perforated')">
                           <a href="{{ route('vinyl_perforated', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.vinyl.perforated')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('sandblast_film')">
                           <a href="{{ route('sandblast_film', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.vinyl.sandblast_film')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('vinyl_car_wrapping')">
                           <a href="{{ route('vinyl_car_wrapping', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.vinyl.car_wrapping')
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="header-menu__list-item">
                     <h3 class="header-menu__title">@lang('main.menu.expos.title')</h3>
                     <ul class="header-menu__sub-list">
                        <li class="header-menu__sub-list-item @yield('expos_stands')">
                           <a href="{{ route('expos_stands', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.expos.stands')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('expos_wall_banner')">
                           <a href="{{ route('expos_wall_banner', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.expos.wall_banner')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('expos_banner')">
                           <a href="{{ route('expos_banner', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.expos.banner')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('expos_roll_up')">
                           <a href="{{ route('expos_roll_up', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.expos.roll_up')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('expos_figures')">
                           <a href="{{ route('expos_figures', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.expos.figures')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('expos_clothing')">
                           <a href="{{ route('expos_clothing', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.expos.clothing')
                           </a>
                        </li>
                        <li class="header-menu__sub-list-item @yield('expos_badges')">
                           <a href="{{ route('expos_badges', ['locale' => __('lang.current')]) }}"
                              class="header-menu__sub-list-link">
                              @lang('main.menu.expos.badges')
                           </a>
                        </li>
                     </ul>
               </ul>
            </nav>
         </div>
      </div>
      <div class="header__burger header-burger">
         <h2 class="header-burger__title">@lang('main.menu.burger.title')</h2>
         <nav class="header-burger__menu">
            <ul class="header-burger__list">
               <li class="header-burger__list-item">
                  <a href="{{route('about_us', ['locale' => __('lang.current')])}}"
                     class="header-burger__list-link @yield('about_us')">
                     @lang('main.menu.burger.about')
                  </a>
               </li>
               <li class="header-burger__list-item">
                  <button class="header-burger__list-link">@lang('main.menu.burger.services')</button>
                  <ul class="header-burger__sub-list">
                     <li class="header-burger__sub-list-item">
                        <h3 class="header-burger__sub-list-item-title">@lang('main.menu.signboards.title')</h3>
                        <ul class="header-burger__sub-sub-list">
                           <li class="header-burger__sub-sub-list-item @yield('signboards_whithout_light')">
                              <a href="{{ route('signboards_whithout_light', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.signboards.whithout_light')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('signboards_whith_light')">
                              <a href="{{ route('signboards_whith_light', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.signboards.whith_light')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('lightbox')">
                              <a href="{{ route('lightbox', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.signboards.lightbox')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('side_box')">
                              <a href="{{ route('side_box', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.signboards.side_box')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('neon')">
                              <a href="{{ route('neon', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.signboards.neon')</a>
                           </li>
                        </ul>
                     </li>
                     <li class="header-burger__sub-list-item">
                        <h3 class="header-burger__sub-list-item-title">@lang('main.menu.letters.title')</h3>
                        <ul class="header-burger__sub-sub-list">
                           <li class="header-burger__sub-sub-list-item @yield('letters_whithout_light')"><a
                                 href="{{ route('letters_without_light', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.letters.whithout_light')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('letters_whith_light')"><a
                                 href="{{ route('letters_with_light', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.letters.whith_light')</a>
                           </li>
                        </ul>
                     </li>
                     <li class="header-burger__sub-list-item">
                        <h3 class="header-burger__sub-list-item-title">@lang('main.menu.vinyl.title')</h3>
                        <ul class="header-burger__sub-sub-list">
                           <li class="header-burger__sub-sub-list-item @yield('vinyl_regular')">
                              <a href="{{ route('vinyl_regular', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.vinyl.regular')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('vinyl_perforated')">
                              <a href="{{ route('vinyl_perforated', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.vinyl.perforated')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('sandblast_film')">
                              <a href="{{ route('sandblast_film', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.vinyl.sandblast_film')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('vinyl_car_wrapping')">
                              <a href="{{ route('vinyl_car_wrapping', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.vinyl.car_wrapping')</a>
                           </li>
                        </ul>
                     </li>
                     <li class="header-burger__sub-list-item">
                        <h3 class="header-burger__sub-list-item-title">@lang('main.menu.expos.title')</h3>
                        <ul class="header-burger__sub-sub-list">
                           <li class="header-burger__sub-sub-list-item @yield('expos_stands')">
                              <a href="{{ route('expos_stands', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.expos.stands')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('expos_wall_banner')">
                              <a href="{{ route('expos_wall_banner', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.expos.wall_banner')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('expos_banner')">
                              <a href="{{ route('expos_banner', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.expos.banner')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('expos_roll_up')">
                              <a href="{{ route('expos_roll_up', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.expos.roll_up')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('expos_figures')">
                              <a href="{{ route('expos_figures', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.expos.figures')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('expos_clothing')">
                              <a href="{{ route('expos_clothing', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.expos.clothing')</a>
                           </li>
                           <li class="header-burger__sub-sub-list-item @yield('expos_badges')">
                              <a href="{{ route('expos_badges', ['locale' => __('lang.current')]) }}"
                                 class="header-burger__sub-sub-list-link">@lang('main.menu.expos.badges')</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li class="header-burger__list-item @yield('portfolio')"><a
                     href="{{route('portfolio', ['locale' => __('lang.current')])}}"
                     class="header-burger__list-link">@lang('main.menu.burger.portfolio')</a></li>
               <li class="header-burger__list-item"><a href="#"
                     class="header-burger__list-link">@lang('main.menu.burger.presentation')</a></li>
               <li class="header-burger__list-item"><a href="#"
                     class="header-burger__list-link">@lang('main.menu.burger.contacts')</a></li>
            </ul>
         </nav>
      </div>
   </div>
</header>