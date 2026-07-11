@extends('layout')
@section('title', __('titles.signboards_whith_light.title'))
@section('description', __('titles.signboards_whith_light.description'))
@section('ogTitle', __('titles.signboards_whith_light.ogTitle'))
@section('ogDescription', __('titles.signboards_whith_light.ogDescription'))
@section('signboards_whith_light', 'active')
@section('mainPopupPayload', 'ВЫВЕСКИ СО СВЕТОМ (' . url()->current() . ')')

@section('content')
    <x-banner-main :image-desktop="'img/signboards/whith_light/' . app()->getLocale() . '/' . __('signboards.whith_light.photo.1.name')" :image-alt="__('signboards.whith_light.photo.1.alt')">
        <x-slot:title>
            {!! __('signboards.whith_light.banner.title') !!}
        </x-slot:title>
        <x-slot:subtitle>
            {!! __('signboards.whith_light.banner.subtitle') !!}
        </x-slot:subtitle>
    </x-banner-main>

    <x-new-advantages :title="__('signboards.whith_light.why_title')" :count="4" :icons="[
        'img/icons/day-night.svg',
        'img/home/icons/get/2.svg',
        'img/icons/lamp.svg',
        'img/home/icons/why/key.svg',
    ]" :advantages="__('signboards.whith_light.why')" />

    <x-achievements direction="bottom" bgColorMobile="white" />

    @php
        $projectsItems = [];
        for ($i = 1; $i <= 9; $i++) {
            $projectsItems[] = [
                'path' =>
                    'img/signboards/whith_light/' .
                    app()->getLocale() .
                    '/projects/' .
                    __('signboards.whith_light.photo.projects.' . $i . '.name'),
                'alt' => __('signboards.whith_light.photo.projects.' . $i . '.alt'),
                'title' => __('signboards.whith_light.photo.projects.' . $i . '.title'),
                'text' => __('signboards.whith_light.photo.projects.' . $i . '.text'),
            ];
        }
    @endphp
    <x-projects :title="__('signboards.whith_light.projects.title')" :subtitle="__('signboards.whith_light.projects.subtitle')" bgColor="grey" :items="$projectsItems" />

    <x-clients :marginTop="true" />

    <x-same-result :title="__('signboards.whith_light.cost.title')" :subtitle="__('signboards.whith_light.cost.text')" :image="'img/signboards/whith_light/' .
        app()->getLocale() .
        '/cost/' .
        __('signboards.whith_light.photo.cost.name')" :alt="__('signboards.whith_light.photo.cost.alt')"
        objectPosition="center calc(30% - var(--pos-y, 0px))" />

    <section class="variants">
        <div class="variants__container">
            <h2 class="variants__title">@lang('signboards.whith_light.variants.title')</h2>
            <p class="variants__subtitle">@lang('signboards.whith_light.variants.subtitle')</p>
            <div class="variants__items">
                @foreach ([1, 2, 3] as $index)
                    <div class="variants__item variants__item--{{ $index }}">
                        <picture class="variants__image-wrapper">
                            @php
                                $locale = app()->getLocale();
                                $imageName = __('signboards.whith_light.photo.variants.' . $index . '.name');
                                $basePath = "img/signboards/whith_light/{$locale}/variants/new/{$imageName}";
                                $avifExists = file_exists(public_path($basePath . '.avif'));
                                $webpExists = file_exists(public_path($basePath . '.webp'));
                            @endphp
                            @if ($avifExists)
                                <source srcset="{{ asset($basePath . '.avif') }}" type="image/avif">
                            @endif
                            @if ($webpExists)
                                <source srcset="{{ asset($basePath . '.webp') }}" type="image/webp">
                            @endif
                            <img src="{{ asset($basePath . '.jpg') }}"
                                alt="{{ __('signboards.whith_light.photo.variants.' . $index . '.alt') }}" loading="lazy"
                                class="variants__image">
                        </picture>
                        <div class="variants__info">
                            <h3 class="variants__item-title">
                                {{ __('signboards.whith_light.photo.variants.' . $index . '.title') }}</h3>
                            <p class="variants__item-text">
                                {{ __('signboards.whith_light.photo.variants.' . $index . '.text') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-new-advantages :title="__('signboards.whith_light.what_title')" :count="3" :icons="['img/home/icons/get/1.svg', 'img/home/icons/get/3.svg', 'img/icons/team.svg']" :advantages="__('signboards.whith_light.what')" :background="'grey'" />

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

    <section class="backlight">
        <div class="backlight__container">
            <h2 class="backlight__title">@lang('signboards.whith_light.backlight_options.title')</h2>
            <p class="backlight__subtitle">@lang('signboards.whith_light.backlight_options.subtitle')</p>
            <div class="backlight__items">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="backlight__item">
                        <div class="backlight__image-box">
                            <picture class="backlight__image-wrapper">
                                @php
                                    $basePath = "img/signboards/whith_light/backlight/{$i}";
                                    $avifExists = file_exists(public_path($basePath . '.avif'));
                                    $webpExists = file_exists(public_path($basePath . '.webp'));
                                @endphp
                                @if ($avifExists)
                                    <source srcset="{{ asset($basePath . '.avif') }}" type="image/avif">
                                @endif
                                @if ($webpExists)
                                    <source srcset="{{ asset($basePath . '.webp') }}" type="image/webp">
                                @endif
                                <img src="{{ asset($basePath . '.jpg') }}"
                                    alt="{{ __('signboards.whith_light.backlight_options.' . $i . '.alt') }}"
                                    loading="lazy" class="backlight__image">
                            </picture>
                            <img src="{{ asset('img/signboards/whith_light/backlight/shadow-' . $i . '.svg') }}"
                                alt="shadow" class="backlight__shadow" loading="lazy">
                        </div>
                        <div class="backlight__info">
                            <h3 class="backlight__item-title">
                                {{ __('signboards.whith_light.backlight_options.' . $i . '.title') }}</h3>
                            <p class="backlight__item-text">
                                {{ __('signboards.whith_light.backlight_options.' . $i . '.text') }}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <x-work :title="__('signboards.whith_light.work.title')" :cards="__('signboards.whith_light.work.cards')" />

    <x-faq :questions="__('signboards.whith_light.questions')" />


    <x-main-text marginBottomNull="false">
        <h2>@lang('signboards.whith_light.text_title')</h2>
        <div class="text">
            @lang('letters.whith_light.about_text')
        </div>
    </x-main-text>

    <x-proposition :title="__('signboards.whith_light.proposition.title')" :subtitle="__('signboards.whith_light.proposition.subtitle')" :image="'img/signboards/whith_light/' .
        app()->getLocale() .
        '/proposition/' .
        __('signboards.whith_light.photo.proposition.name')" :alt="__('signboards.whith_light.photo.proposition.alt')"
        objectPosition="center calc(30% - var(--pos-y, 0px))" />

    <x-question-lead>
        ВЫВЕСКИ СО СВЕТОМ ({{ url()->current() }})
    </x-question-lead>
@endsection
