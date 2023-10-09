@section('popup')
<div id="main" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <div class="popup__loading">
            <img src="{{asset('img/load_100.gif')}}" alt="">
         </div>
         <button class="popup__close close-popup"><span></span><span></span></button>
         <div class="popup__row">
            <div class="popup__form">
               <div class="popup__form-body">
                  <div class="popup__title">
                     <h4 class="popup__title-icon">@lang('popup.title')</h4>
                     <h4 class="popup__title-gift">@lang('popup.gift.title')</h4>
                     <h5 class="popup__title-sub-gift">@lang('popup.gift.sub_title')</h5>
                  </div>
                  <div class="popup__text">
                     <form action="{{route('sendMainForm')}}" method="POST" name="mainForm" id="mainForm"
                        class="@lang('lang.current')">
                        @csrf
                        <input class="payload" name="payload" type="hidden" value="">
                        <div class="popup__item">
                           <label for="name">@lang('popup.name')</label>
                           <input id="name" name="name" class="input" type="text"
                              placeholder="@lang('popup.name_placeholder')">
                           <p class="error-name"></p>
                        </div>
                        <div class="popup__item">
                           <label for="phone">@lang('popup.phone')</label>
                           <input id="phone" name="phone" class="input" type="text"
                              placeholder="@lang('popup.phone_placeholder')">
                           <p class="error-phone"></p>
                        </div>
                        <div class="popup__item">
                           <label for="email">@lang('popup.email')</label>
                           <input id="email" name="email" class="input" type="text"
                              placeholder="@lang('popup.email_placeholder')">
                           <p class="error-email"></p>
                        </div>
                        <div class="popup__item popup__item-select-body">
                           <label for="select">@lang('popup.service')</label>
                           <div class="popup__item-select">
                              <span class="select-placeholder">@lang('popup.select_placeholder')</span>
                              <select id="select" name="service" id="popupMainSelect">
                                 <option hidden disabled selected value=""></option>
                                 <option value="Вывески">@lang('main.menu.signboards.title')</option>
                                 <option value="Буквы">@lang('main.menu.letters.title')</option>
                                 <option value="Винил">@lang('main.menu.vinyl.title')</option>
                                 <option value="Ивенты">@lang('main.menu.expos.title')</option>
                              </select>
                           </div>
                           <p class="error-email"></p>
                        </div>
                        <div class="popup__item popup-download disabled">
                           <div class="file">
                              <span></span>
                              <input id="fileImage" type="file" name="filename" class="popup-file">
                              <span></span>
                              <span></span>
                              <div class="file-button">@lang('popup.file')</div>
                              <p class="file-error error"></p>
                           </div>
                           <div id="filePreview" class="preview-file"></div>
                        </div>
                        <button class="popup__btn" type="submit">@lang('popup.btn')</button>
                     </form>
                  </div>
               </div>
               <div class="success">
                  <h4>@lang('popup.success.title')</h4>
                  <button class="popup__button">
                     @lang('popup.success.btn')
                  </button>
               </div>
            </div>
            @if(App::isLocale('es'))
            <div class="popup__img-body">
               <div class="popup__img-body-icon">
               </div>
               <div class="popup__img-body-gift">
               </div>
            </div>
            @elseif(App::isLocale('ru'))
            <div class="popup__img-body">
               <div class="popup__img-body-icon">
               </div>
               <div class="popup__img-body-gift">
               </div>
            </div>
            @endif
         </div>
      </div>
   </div>
</div>
</div>


{{-- <div id="gift" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <div class="popup__loading">
            <img src="{{asset('img/load_100.gif')}}" alt="">
         </div>
         <button class="popup__close close-popup"><span></span><span></span></button>
         <div class="popup__row">
            <div class="popup__form">
               <div class="popup__form-body">
                  <div class="popup__title">
                     <h4>@lang('popup.gift.title')</h4>
                     <h5>@lang('popup.gift.sub_title')</h5>
                  </div>
                  <div class="popup__text">
                     <form action="{{route('sendMainForm')}}" method="POST" name="mainForm" id="giftForm"
                        class="@lang('lang.current')">
                        @csrf
                        <div class="popup__item">
                           <label for="giftName">@lang('popup.name')</label>
                           <input id="giftName" name="name" type="text" placeholder="@lang('popup.name_placeholder')">
                           <p class="error-name"></p>
                        </div>
                        <div class="popup__item">
                           <label for="giftPhone">@lang('popup.phone')</label>
                           <input id="giftPhone" name="phone" type="text"
                              placeholder="@lang('popup.phone_placeholder')">
                           <p class="error-phone"></p>
                        </div>
                        <div class="popup__item">
                           <label for="giftEmail">@lang('popup.email')</label>
                           <input id="giftEmail" name="email" type="text"
                              placeholder="@lang('popup.email_placeholder')">
                           <p class="error-email"></p>
                        </div>
                        <div class="popup__item">
                           <label for="select">@lang('popup.service')</label>
                           <div class="popup__item-select">
                              <span class="select-placeholder">@lang('popup.select_placeholder')</span>
                              <select name="service" id="popupMainSelect">
                                 <option hidden disabled selected value=""></option>
                                 <option value="Вывески">@lang('main.menu.signboards')</option>
                                 <option value="Буквы">@lang('main.menu.letters.title')</option>
                                 <option value="Винил">@lang('main.menu.vinyl')</option>
                                 <option value="Ивенты">@lang('main.menu.events')</option>
                              </select>
                           </div>
                           <p class="error-email"></p>
                        </div>
                        <button class="popup__btn" type="submit">@lang('popup.btn')</button>
                     </form>
                  </div>
               </div>
               <div class="success">
                  <h4>@lang('popup.success.title')</h4>
                  <button class="popup__button">
                     @lang('popup.success.btn')
                  </button>
               </div>
            </div>
            <div class="popup__img">
               @if(App::isLocale('es'))
               <img src="{{ asset('img/popup/es/2_.webp') }}" alt="">
               @elseif(App::isLocale('ru'))
               <img src="{{ asset('img/popup/ru/2_.webp') }}" alt="">
               @endif
            </div>
         </div>
      </div>
   </div>
</div>


<div id="quiz" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <div class="popup__loading">
            <img src="{{asset('img/load_100.gif')}}" alt="">
         </div>
         <button class="popup__close close-popup"><span></span><span></span></button>
         <div class="popup__row">
            <div class="popup__form">
               <div class="popup__form-body">
                  <div class="popup__title">
                     <h4>@lang('popup.title')</h4>
                  </div>
                  <div class="popup__text">
                     <form action="{{route('sendMainForm')}}" method="POST" name="mainForm" id="mainForm"
                        class="@lang('lang.current')">
                        @csrf
                        <input class="quiz-service-data" name="payload" type="hidden" value="">
                        <div class="popup__item">
                           <label for="name">@lang('popup.name')</label>
                           <input id="quizName" name="name" type="text" placeholder="@lang('popup.name_placeholder')">
                           <p class="error-name"></p>
                        </div>
                        <div class="popup__item">
                           <label for="phone">@lang('popup.phone')</label>
                           <input id="quizPhone" name="phone" type="text"
                              placeholder="@lang('popup.phone_placeholder')">
                           <p class="error-phone"></p>
                        </div>
                        <div class="popup__item">
                           <label for="email">@lang('popup.email')</label>
                           <input id="quizEmail" name="email" type="text"
                              placeholder="@lang('popup.email_placeholder')">
                           <p class="error-email"></p>
                        </div>
                        <div class="popup__item popup-download disabled">
                           <div class="file">
                              <span></span>
                              <input id="fileImage" type="file" name="filename" class="popup-file">
                              <span></span>
                              <span></span>
                              <div class="file-button">@lang('popup.file')</div>
                              <p class="file-error error"></p>
                           </div>
                           <div id="filePreview" class="preview-file"></div>
                        </div>
                        <button class="popup__btn" type="submit">@lang('popup.btn')</button>
                     </form>
                  </div>
               </div>
               <div class="success">
                  <h4>@lang('popup.success.title')</h4>
                  <button class="popup__button">
                     @lang('popup.success.btn')
                  </button>
               </div>
            </div>
            <div class="popup__img">
               @if(App::isLocale('es'))
               <img src="{{ asset('img/popup/es/1_.webp') }}" alt="">
               @elseif(App::isLocale('ru'))
               <img src="{{ asset('img/popup/ru/1_.webp') }}" alt="">
               @endif
            </div>
         </div>
      </div>
   </div>
</div> --}}