@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'home')

@section('content')

<section class="main">
    <div class="main__baner">
        <picture>
            @if(App::isLocale('es'))
            <source type="image/webp" srcset="{{ asset('img/home/es/1_.webp') }}" media="(min-width: 768px)">
            <source type="image/webp" srcset="{{ asset('img/home/es/1mob_.webp') }}">
            @elseif(App::isLocale('ru'))
            <source type="image/webp" srcset="{{ asset('img/home/ru/1_.webp') }}" media="(min-width: 768px)">
            <source type="image/webp" srcset="{{ asset('img/home/ru/1mob_.webp') }}">
            @endif
            @if(App::isLocale('es'))
            <img src="{{ asset('img/home/es/1_.webp') }}" alt="">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/home/ru/1_.webp') }}" alt="">
            @endif
        </picture>
    </div>
    <div class="main__content">
        <div class="main__body">
            <div class="main__border"></div>
            <h1 class="main__title">@lang('home.main.title')</h1>
            <ul class="main__list">
                <li class="main__list-item">@lang('home.main.list-1')</li>
                <li class="main__list-item">@lang('home.main.list-2')</li>
                <li class="main__list-item">@lang('home.main.list-3')</li>
                <li class="main__list-item">@lang('home.main.list-4')</li>
            </ul>
            <button class="main__btn">@lang('home.main.btn')</button>
        </div>
    </div>


    <div class="main_img-rating">
        <img src="{{ asset('img/home/google.webp') }}" alt="">
    </div>
</section>
<section>
    <div class="test__container">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptatibus corporis numquam aliquid ea sit
        corrupti ad omnis error exercitationem aspernatur ducimus, placeat velit veritatis debitis molestiae ab minus
        dolorum!
    </div>

</section>
@endsection