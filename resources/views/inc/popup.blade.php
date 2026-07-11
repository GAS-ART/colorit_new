@section('popup')
    <div id="main" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <div class="popup__loading">
                    <img src="{{ asset('img/load_100.gif') }}" alt="">
                </div>
                <button class="popup__close close-popup"><span></span><span></span></button>
                <div class="popup__row">
                    <div class="popup__form">
                        <div class="popup__form-body">
                            <div class="popup__title">
                                <h4 class="popup__title-icon">@lang('popup.title')</h4>
                            </div>
                            <div class="popup__text">
                                <form action="{{ route('sendMainForm') }}" method="POST" name="mainForm" id="mainForm"
                                    class="@lang('lang.current')" enctype="multipart/form-data">
                                    @csrf
                                    <input class="payload" name="payload" type="hidden" value="">
                                    <div class="popup__item popup__item-select-body">
                                        <label for="popupMainSelect">{!! __('popup.service') !!}</label>
                                        <div class="popup__item-select">
                                            {{--  <span class="select-placeholder">@lang('popup.select_placeholder')</span> --}}
                                            <select name="service" id="popupMainSelect" class="placeholder">
                                                <option hidden disabled selected value="">@lang('popup.select_placeholder')</option>
                                                <option value="Вывески">@lang('main.menu.signboards.title')</option>
                                                <option value="Буквы">@lang('main.menu.letters.title')</option>
                                                <option value="Винил">@lang('main.menu.vinyl.title')</option>
                                                <option value="Ивенты">@lang('main.menu.expos.title')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="popup__item">
                                        <label for="name">{!! __('popup.name') !!}</label>
                                        <input id="name" name="name" class="input" type="text"
                                            placeholder="@lang('popup.name_placeholder')">
                                        <p class="error-name"></p>
                                    </div>
                                    <div class="popup__item">
                                        <label for="phone">{!! __('popup.phone') !!}</label>
                                        <input id="phone" name="phone" class="input" type="text"
                                            placeholder="@lang('popup.phone_placeholder')">
                                        <p class="error-phone"></p>
                                    </div>
                                    <div class="popup__item popup-download" id="popupDragDrop">
                                        <input id="fileImage" type="file" name="filename" class="popup-file"
                                            accept=".pdf,.doc,.docx,.ppt,.pptx,.jpg,.jpeg,.png,.webp,.avif">
                                        <div class="popup__drag-drop-content">
                                            <img src="{{ asset('img/icons/upload.svg') }}" alt="">
                                            <p class="popup__drag-drop-title">{!! __('popup.drag_drop') !!}</p>
                                            <p class="popup__drag-drop-formats">{!! __('popup.formats') !!}</p>
                                        </div>
                                        <div id="filePreview" class="preview-file"></div>
                                        <p class="file-error error"></p>
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
                    <div class="popup__img-body">
                        <picture>
                            <source
                                srcset="{{ asset('img/popup/' . app()->getLocale() . '/' . __('popup.photo.name') . '.avif') }}"
                                type="image/avif">
                            <source
                                srcset="{{ asset('img/popup/' . app()->getLocale() . '/' . __('popup.photo.name') . '.webp') }}"
                                type="image/webp">
                            <img src="{{ asset('img/popup/' . app()->getLocale() . '/' . __('popup.photo.name') . '.jpg') }}"
                                alt="{{ __('popup.photo.alt') }}">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
