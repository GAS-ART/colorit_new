@extends('layout')
@section('title', __('titles.expos_stands.title'))
@section('description', __('titles.expos_stands.description'))
@section('ogTitle', __('titles.expos_stands.ogTitle'))
@section('ogDescription', __('titles.expos_stands.ogDescription'))
@section('expos_stands', 'active')
@section('mainPopupPayload', 'СТЕНДЫ (' . url()->current() . ')')

@section('body_class', 'wide-container-page')

@section('content')
    <x-banner-main :image-desktop="'img/expos/stands/' . app()->getLocale() . '/' . __('expos.stands.photo.1.name')" :image-alt="__('expos.stands.photo.1.alt')">
        <x-slot:title>
            {!! __('expos.stands.banner.title') !!}
        </x-slot:title>
        <x-slot:subtitle>
            {!! __('expos.stands.banner.subtitle') !!}
        </x-slot:subtitle>
        <x-slot:categories>
            <p class="banner-main__category">@lang('expos.stands.banner.categories.1')</p>
            <p class="banner-main__category">@lang('expos.stands.banner.categories.2')</p>
            <p class="banner-main__category">@lang('expos.stands.banner.categories.3')</p>
            <p class="banner-main__category">@lang('expos.stands.banner.categories.4')</p>
        </x-slot:categories>
    </x-banner-main>

    <section class="expos-types">
        <div class="expos-types__container">
            @foreach (__('expos.stands.types.list') as $item)
                <div class="expos-types__card">
                    {{ $item }}
                </div>
            @endforeach
        </div>
    </section>

    <x-new-advantages :count="3" :icons="['img/home/icons/why/key.svg', 'img/home/icons/why/calendar.svg', 'img/home/icons/why/gear.svg']" :advantages="__('expos.stands.advantages')" />

    <x-clients />

    <x-achievements direction="bottom" bgColorMobile="grey" />

    <x-same-result :title="__('expos.stands.cost.title')" :subtitle="__('expos.stands.cost.text')" :image="'img/expos/stands/' . app()->getLocale() . '/cost/' . __('expos.stands.photo.cost.name')" :alt="__('expos.stands.photo.cost.alt')" objectPosition="top" />

    <section class="for-exhibitions">
        <div class="for-exhibitions__container">
            <h2 class="for-exhibitions__title">@lang('expos.stands.for_exhibitions.title')</h2>
            <div class="for-exhibitions__text">
                {!! __('expos.stands.for_exhibitions.text') !!}
            </div>

            <div class="for-exhibitions__cards">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="for-exhibitions__card">
                        <div class="for-exhibitions__card-image">
                            <picture>
                                <source
                                    srcset="{{ asset('img/expos/stands/' . app()->getLocale() . '/for_exhibitions/' . __('expos.stands.photo.for_exhibitions.' . $i . '.name') . '.avif') }}"
                                    type="image/avif">
                                <source
                                    srcset="{{ asset('img/expos/stands/' . app()->getLocale() . '/for_exhibitions/' . __('expos.stands.photo.for_exhibitions.' . $i . '.name') . '.webp') }}"
                                    type="image/webp">
                                <img src="{{ asset('img/expos/stands/' . app()->getLocale() . '/for_exhibitions/' . __('expos.stands.photo.for_exhibitions.' . $i . '.name') . '.jpg') }}"
                                    alt="{{ __('expos.stands.photo.for_exhibitions.' . $i . '.alt') }}">
                            </picture>
                            {{-- <div class="for-exhibitions__card-arrow">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 13L13 1M13 1V11.4M13 1H2.6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div> --}}
                        </div>
                        <div class="for-exhibitions__card-title">@lang('expos.stands.for_exhibitions.cards.' . $i . '.title')</div>
                        <div class="for-exhibitions__card-text">@lang('expos.stands.for_exhibitions.cards.' . $i . '.text')</div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    @php
        $projectsItems = [];
        for ($i = 1; $i <= 9; $i++) {
            $projectsItems[] = [
                'path' =>
                    'img/expos/stands/' .
                    app()->getLocale() .
                    '/projects/' .
                    __('expos.stands.photo.projects.' . $i . '.name'),
                'alt' => __('expos.stands.photo.projects.' . $i . '.alt'),
                'title' => __('expos.stands.photo.projects.' . $i . '.title'),
                'text' => __('expos.stands.photo.projects.' . $i . '.text'),
            ];
        }
    @endphp
    <x-projects :title="__('expos.stands.projects.title')" bgColor="white" :items="$projectsItems" />

    <x-new-advantages :title="__('expos.stands.why_title')" :count="4" :icons="[
        'img/home/icons/why/note.svg',
        'img/home/icons/get/5.svg',
        'img/home/icons/why/calendar.svg',
        'img/home/icons/why/key.svg',
    ]" :advantages="__('expos.stands.why')" />

    <x-work :title="__('expos.stands.work.title')" :cards="__('expos.stands.work.cards')" bgColor="gray" />

    <x-proposition :title="__('expos.stands.proposition.title')" :subtitle="__('expos.stands.proposition.subtitle')" :image="'img/expos/stands/' . app()->getLocale() . '/proposition/' . __('expos.stands.photo.proposition.name')" :alt="__('expos.stands.photo.proposition.alt')" :footnote="__('expos.stands.proposition.footnote')"
        marginBottomNull="true" />

    <x-faq :questions="__('home.questions')" />

    <x-main-text>
        <h2>@lang('expos.stands.text_title')</h2>
        <div class="text">
            @lang('expos.stands.text')
        </div>
    </x-main-text>
    <x-question-lead />
@endsection
