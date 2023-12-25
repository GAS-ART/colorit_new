@section('footer')
    <footer id="footer" class="footer">
        <div class="footer__container">
            <div class="footer__body">
                <div class="footer__logo">
                    <img src="{{ asset('img/colorit-logo.svg') }}" alt="">
                </div>
                <div class="footer__text">
                    @lang('footer.text')
                </div>
                <div class="footer__contact">
                    <div class="footer__phone">
                        <a class="footer__contact-link" href="tel:%2B34691820317">@lang('main.phone')</a>
                        <div class="footer__messengers">
                            <a href="https://wa.me/34691820317" class="footer__messengers-item footer__messengers-whatsapp">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style="width: 100%; height: 100%; fill: rgb(255, 255, 255); stroke: none;">
                                    <path
                                        d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z">
                                    </path>
                                </svg>
                            </a>
                            <a href="tg://resolve?domain=colorit_agency"
                                class="footer__messengers-item footer__messengers-telegram">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style="width: 100%; height: 100%; fill: rgb(255, 255, 255); stroke: none;">
                                    <path
                                        d="M15.02 20.814l9.31-12.48L9.554 17.24l1.92 6.42c.225.63.114.88.767.88l.344-5.22 2.436 1.494z"
                                        opacity=".6"></path>
                                    <path d="M12.24 24.54c.504 0 .727-.234 1.008-.51l2.687-2.655-3.35-2.054-.344 5.22z"
                                        opacity=".3">
                                    </path>
                                    <path
                                        d="M12.583 19.322l8.12 6.095c.926.52 1.595.25 1.826-.874l3.304-15.825c.338-1.378-.517-2.003-1.403-1.594L5.024 14.727c-1.325.54-1.317 1.29-.24 1.625l4.98 1.58 11.53-7.39c.543-.336 1.043-.156.633.214">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <p class="footer__contact-time">@lang('main.time')</p>
                    <div class="footer__contact-icons">
                        <div class="footer__contact-icon">
                            <a href="https://www.facebook.com/colorit.agency">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16"
                                    fill="none">
                                    <path
                                        d="M6.07934 15.9688H3.51207C3.08325 15.9688 2.73442 15.6206 2.73442 15.1926V9.41333H1.23663C0.80781 9.41333 0.458984 9.06506 0.458984 8.63721V6.16077C0.458984 5.73279 0.80781 5.38464 1.23663 5.38464H2.73442V4.14453C2.73442 2.91492 3.12129 1.86877 3.85306 1.11938C4.58814 0.366577 5.61542 -0.03125 6.82383 -0.03125L8.78176 -0.0280762C9.20984 -0.0273437 9.55805 0.320801 9.55805 0.748047V3.04736C9.55805 3.47534 9.20935 3.82349 8.78066 3.82349L7.46241 3.82398C7.06038 3.82398 6.95801 3.90442 6.93611 3.92908C6.90003 3.96997 6.8571 4.08557 6.8571 4.40479V5.38452H8.68159C8.81894 5.38452 8.95201 5.41834 9.06637 5.48206C9.31307 5.61963 9.46644 5.87976 9.46644 6.16089L9.46547 8.63733C9.46547 9.06506 9.11664 9.41321 8.68783 9.41321H6.8571V15.1926C6.8571 15.6206 6.50815 15.9688 6.07934 15.9688ZM3.67425 15.0308H5.91715V8.99341C5.91715 8.70764 6.15015 8.47522 6.43636 8.47522H8.52564L8.5265 6.32263H6.43623C6.15003 6.32263 5.91715 6.09021 5.91715 5.80444V4.40479C5.91715 4.03833 5.95446 3.62158 6.23161 3.30835C6.56649 2.92969 7.09426 2.88599 7.46216 2.88599L8.61823 2.8855V0.909668L6.8231 0.906738C4.88107 0.906738 3.67425 2.14746 3.67425 4.14453V5.80444C3.67425 6.09009 3.44137 6.32263 3.15517 6.32263H1.39881V8.47522H3.15517C3.44137 8.47522 3.67425 8.70764 3.67425 8.99341V15.0308Z"
                                        fill="#17161A" />
                                </svg>
                            </a>
                        </div>
                        <div class="footer__contact-icon">
                            <a href="https://www.instagram.com/colorit.agency/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <g clip-path="url(#clip0_71_447)">
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
                                        <clipPath id="clip0_71_447">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="foote__contact-icons map-icon">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 174.239 174.239" style="enable-background:new 0 0 174.239 174.239;" xml:space="preserve">
                  <g>
                     <path d="M87.12,150.456l6.155-8.943c4.55-6.621,44.498-65.427,44.498-90.861C137.773,22.723,115.049,0,87.12,0   S36.467,22.723,36.467,50.653c0,25.436,39.948,84.239,44.503,90.861L87.12,150.456z M87.12,14.935   c19.694,0,35.718,16.024,35.718,35.718c0,13.8-19.908,48.927-35.718,73.194C71.31,99.585,51.402,64.462,51.402,50.653   C51.402,30.959,67.425,14.935,87.12,14.935z"/>
                     <path d="M130.062,113.679l-7.156-2.132l-4.259,14.315l7.156,2.129c14.906,4.439,20.331,10.204,20.336,12.997   c0.015,6.162-20.783,18.209-58.966,18.316c-16.719,0.097-32.616-2.399-44.352-6.882c-10.102-3.86-14.716-8.464-14.721-11.106   c-0.01-2.757,5.28-8.491,19.889-12.997l7.137-2.2l-4.405-14.271l-7.137,2.202c-19.651,6.062-30.453,15.761-30.419,27.308   c0.015,5.878,3.199,16.943,24.323,25.015c13.287,5.078,30.745,7.866,49.214,7.866c0.17,0,0.34,0,0.51,0   c36.749-0.102,73.92-11.571,73.862-33.287C161.045,129.309,150.033,119.622,130.062,113.679z"/>
                     <path d="M101.996,49.097c0-8.204-6.675-14.879-14.876-14.879s-14.876,6.675-14.876,14.879s6.675,14.879,14.876,14.879   S101.996,57.301,101.996,49.097z M87.12,56.508L87.12,56.508L87.12,56.508L87.12,56.508L87.12,56.508z"/>
                  </g>
                  </svg> --}}
                        <p>Riera de Pahissa, 21-1, 08980 Sant Feliu de Llobregat, Barcelona</p>
                    </div>
                </div>
                <nav class="footer__links links-footer">
                    <ul class="links-footer__list">
                        <li class="links-footer__item">
                            <h3 class="links-footer__item-title">@lang('main.menu.signboards.title')</h3>
                            <ul class="links-footer__sub-list">
                                <li class="links-footer__sub-list-item @yield('signboards_whithout_light')">
                                    <a href="{{ route('signboards_whithout_light', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.signboards.whithout_light')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('signboards_whith_light')">
                                    <a href="{{ route('signboards_whith_light', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.signboards.whith_light')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('lightbox')">
                                    <a href="{{ route('lightbox', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.signboards.lightbox')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('side_box')">
                                    <a href="{{ route('side_box', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.signboards.side_box')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('neon')">
                                    <a href="{{ route('neon', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.signboards.neon')</a>
                                </li>
                            </ul>
                        </li>
                        <li class="links-footer__item">
                            <h3 class="links-footer__item-link">@lang('main.menu.letters.title')</h3>
                            <ul class="links-footer__sub-list">
                                <li class="links-footer__sub-list-item @yield('letters_whithout_light')"><a
                                        href="{{ route('letters_without_light', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.letters.whithout_light')</a></li>
                                <li class="links-footer__sub-list-item @yield('letters_whith_light')"><a
                                        href="{{ route('letters_with_light', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.letters.whith_light')</a></li>
                            </ul>
                        </li>
                        <li class="links-footer__item">
                            <h3 class="links-footer__item-link">@lang('main.menu.expos.title')</h3>
                            <ul class="links-footer__sub-list">
                                <li class="links-footer__sub-list-item @yield('expos_stands')">
                                    <a href="{{ route('expos_stands', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.expos.stands')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('expos_wall_banner')">
                                    <a href="{{ route('expos_wall_banner', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.expos.wall_banner')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('expos_banner')">
                                    <a href="{{ route('expos_banner', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.expos.banner')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('expos_roll_up')">
                                    <a href="{{ route('expos_roll_up', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.expos.roll_up')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('expos_figures')">
                                    <a href="{{ route('expos_figures', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.expos.figures')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('expos_clothing')">
                                    <a href="{{ route('expos_clothing', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.expos.clothing')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('expos_badges')">
                                    <a href="{{ route('expos_badges', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.expos.badges')</a>
                                </li>
                            </ul>
                        </li>
                        <li class="links-footer__item">
                            <h3 class="links-footer__item-link">@lang('main.menu.vinyl.title')</h3>
                            <ul class="links-footer__sub-list">
                                <li class="links-footer__sub-list-item @yield('vinyl_regular')">
                                    <a href="{{ route('vinyl_regular', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.vinyl.regular')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('vinyl_perforated')">
                                    <a href="{{ route('vinyl_perforated', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.vinyl.perforated')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('sandblast_film')">
                                    <a href="{{ route('sandblast_film', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.vinyl.sandblast_film')</a>
                                </li>
                                <li class="links-footer__sub-list-item @yield('vinyl_car_wrapping')">
                                    <a href="{{ route('vinyl_car_wrapping', ['locale' => __('lang.current')]) }}"
                                        class="links-footer__sub-list-link">@lang('main.menu.vinyl.car_wrapping')</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="footer__rights">
                <p class="footer__rights-text">@lang('footer.copiright')</p>
                <a href="{{ route('privacy') }}" class="footer__rights-text">@lang('footer.privacy')</a>
            </div>
        </div>
    </footer>
