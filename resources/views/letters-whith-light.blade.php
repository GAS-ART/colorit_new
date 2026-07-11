@extends('layout')
@section('title', __('titles.letters_whith_light.title'))
@section('description', __('titles.letters_whith_light.description'))
@section('ogTitle', __('titles.letters_whith_light.ogTitle'))
@section('ogDescription', __('titles.letters_whith_light.ogDescription'))
@section('letters_whith_light', 'active')
@section('mainPopupPayload', 'БУКВЫ СО СВЕТОМ (' . url()->current() . ')')

@section('body_class', 'wide-container-page')

@section('content')
    <x-banner-main :image-desktop="'img/letters/with_light/' . app()->getLocale() . '/' . __('letters.whith_light.photo.1.name')" :image-alt="__('letters.whith_light.photo.1.alt')">
        <x-slot:title>
            {!! __('letters.whith_light.banner.title') !!}
        </x-slot:title>
        <x-slot:subtitle>
            {!! __('letters.whith_light.banner.subtitle') !!}
        </x-slot:subtitle>
    </x-banner-main>

    <x-new-advantages :title="__('letters.whith_light.why_title')" :count="4" :icons="[
        'img/home/icons/get/3.svg',
        'img/icons/lamp.svg',
        'img/home/icons/why/key.svg',
        'img/home/icons/why/note.svg',
    ]" :advantages="__('letters.whith_light.why')" />

    <x-clients />

    <x-achievements direction="bottom" bgColorMobile="white" />

    @php
        $projectsItems = [];
        for ($i = 1; $i <= 9; $i++) {
            $projectsItems[] = [
                'path' =>
                    'img/letters/with_light/' .
                    app()->getLocale() .
                    '/projects/' .
                    __('letters.whith_light.photo.projects.' . $i . '.name'),
                'alt' => __('letters.whith_light.photo.projects.' . $i . '.alt'),
                'title' => __('letters.whith_light.photo.projects.' . $i . '.title'),
                'text' => __('letters.whith_light.photo.projects.' . $i . '.text'),
            ];
        }
    @endphp
    <x-projects :title="__('letters.whith_light.projects.title')" :subtitle="__('letters.whith_light.projects.subtitle')" bgColor="grey" :items="$projectsItems" />

    <x-same-result :title="__('letters.whith_light.cost.title')" :subtitle="__('letters.whith_light.cost.text')" :image="'img/letters/with_light/' . app()->getLocale() . '/cost/' . __('letters.whith_light.photo.cost.name')" :alt="__('letters.whith_light.photo.cost.alt')"
        objectPosition="center calc(30% - var(--pos-y, 0px))" :backgroundColor="'#F6F6F6'" />

    <section class="types">
        <div class="types__container">
            <h2 class="types__title">@lang('letters.whith_light.types.title')</h2>
            <div class="types__items">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="types__item">
                        <div class="types__item-img">
                            <picture>
                                <source
                                    srcset="{{ asset('img/letters/with_light/' . app()->getLocale() . '/types/' . __('letters.whith_light.photo.types.' . $i . '.name') . '.avif') }}"
                                    type="image/avif">
                                <img src="{{ asset('img/letters/with_light/' . app()->getLocale() . '/types/' . __('letters.whith_light.photo.types.' . $i . '.name') . '.jpg') }}"
                                    alt="{{ __('letters.whith_light.photo.types.' . $i . '.alt') }}">
                            </picture>
                        </div>
                        <h3 class="types__item-title">@lang("letters.whith_light.types.$i.title")</h3>
                        <div class="types__item-text">@lang("letters.whith_light.types.$i.text")</div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <x-new-advantages :title="__('letters.whith_light.get_title')" :count="3" :icons="['img/home/icons/get/1.svg', 'img/home/icons/get/2.svg', 'img/home/icons/why/location.svg']" :advantages="__('letters.whith_light.get')" :background="'grey'" />

    <section class="materials">
        <div class="materials__container">
            <h2 class="materials__title">@lang('letters.whith_light.materials.title')</h2>
            <div class="materials__subtitle">@lang('letters.whith_light.materials.subtitle')</div>
            <div class="materials__items">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="materials__item">
                        <div class="materials__item-img">
                            <picture>
                                <source
                                    srcset="{{ asset('img/letters/with_light/' . app()->getLocale() . '/material/new/' . __('letters.whith_light.photo.materials.' . $i . '.name') . '.webp') }}"
                                    type="image/webp">
                                <source
                                    srcset="{{ asset('img/letters/with_light/' . app()->getLocale() . '/material/new/' . __('letters.whith_light.photo.materials.' . $i . '.name') . '.avif') }}"
                                    type="image/avif">
                                <img src="{{ asset('img/letters/with_light/' . app()->getLocale() . '/material/new/' . __('letters.whith_light.photo.materials.' . $i . '.name') . '.jpg') }}"
                                    alt="{{ __('letters.whith_light.photo.materials.' . $i . '.alt') }}">
                            </picture>
                        </div>
                        <h3 class="materials__item-title">@lang("letters.whith_light.materials.cards.$i.title")</h3>
                        <div class="materials__item-text">@lang("letters.whith_light.materials.cards.$i.text")</div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <x-work :title="__('letters.whith_light.work.title')" :cards="__('letters.whith_light.work.cards')" />

    <x-faq :questions="__('letters.whith_light.questions')" />

    <x-main-text :marginBottomNull="true">
        <h2>@lang('letters.whith_light.text_title')</h2>
        <div class="text">
            @lang('letters.whith_light.about_text')
        </div>
    </x-main-text>

    <x-proposition :title="__('letters.whith_light.proposition.title')" :subtitle="__('letters.whith_light.proposition.subtitle')" :image="'img/letters/with_light/' .
        app()->getLocale() .
        '/proposition/' .
        __('letters.whith_light.photo.proposition.name')" :alt="__('letters.whith_light.photo.proposition.alt')" :footnote="__('letters.whith_light.proposition.footnote')" />

    <x-question-lead>
        БУКВЫ СО СВЕТОМ ({{ url()->current() }})
    </x-question-lead>
@endsection
