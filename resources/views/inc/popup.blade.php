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
                     <h4>@lang('popup.title')</h4>
                  </div>
                  <div class="popup__text">
                     <form action="{{route('sendMainForm')}}" method="POST" name="mainForm" id="mainForm"
                        class="@lang('lang.current')">
                        @csrf
                        <div class="popup__item">
                           <label for="name">@lang('popup.name')</label>
                           <input id="name" name="name" type="text" placeholder="@lang('popup.name_placeholder')">
                           <p class="error-name"></p>
                        </div>
                        <div class="popup__item">
                           <label for="phone">@lang('popup.phone')</label>
                           <input id="phone" name="phone" type="text" placeholder="@lang('popup.phone_placeholder')">
                           <p class="error-phone"></p>
                        </div>
                        <div class="popup__item">
                           <label for="email">@lang('popup.email')</label>
                           <input id="email" name="email" type="text" placeholder="@lang('popup.email_placeholder')">
                           <p class="error-email"></p>
                        </div>
                        <div class="popup__item">
                           <label for="select">@lang('popup.service')</label>
                           <select id="popupMainSelect">
                              <option hidden disabled selected value="">@lang('popup.select_placeholder')</option>
                              <option>@lang('main.menu.signboards')</option>
                              <option>@lang('main.menu.letters')</option>
                              <option>@lang('main.menu.vinyl')</option>
                              <option>@lang('main.menu.events')</option>
                           </select>
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
               <img src="{{ asset('img/popup/es/1_.webp') }}" alt="">
               @elseif(App::isLocale('ru'))
               <img src="{{ asset('img/popup/ru/1_.webp') }}" alt="">
               @endif
            </div>
         </div>
      </div>
   </div>
</div>