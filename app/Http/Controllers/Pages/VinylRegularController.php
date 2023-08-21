<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylRegularController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'vinyl.regular.banner.title',
            'es' => [
            'imgBig' => 'img/vinyl/regular/es/main.webp',
            'imgMin' => 'img/vinyl/regular/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/vinyl/regular/ru/main.webp',
            'imgMin' => 'img/vinyl/regular/ru/main_.webp',
            ],
            'alt' => 'alt.vinyl.regular.banner',
            'circle_text' => 'vinyl.regular.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.vinyl_regular')
        ];

        return $this->setLocaleAndView($locale, 'vinyl-regular', compact('banner', 'breadCrumbs'));
    }
}
