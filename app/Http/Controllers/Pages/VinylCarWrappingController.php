<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylCarWrappingController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'vinyl.car_wrapping.banner.title',
            'es' => [
            'imgBig' => 'img/vinyl/car_wrapping/es/main.webp',
            'imgMin' => 'img/vinyl/car_wrapping/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/vinyl/car_wrapping/ru/main.webp',
            'imgMin' => 'img/vinyl/car_wrapping/ru/main_.webp',
            ],
            'alt' => 'alt.vinyl.car_wrapping.banner',
            'circle_text' => 'vinyl.car_wrapping.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.vinyl_car_wrapping')
        ];

        return $this->setLocaleAndView($locale, 'vinyl-car-wrapping', compact('banner', 'breadCrumbs'));
    }
}
