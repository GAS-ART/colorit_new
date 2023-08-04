<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsWithLightController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'signboards.whith_light.banner.title',
            'es' => [
            'imgBig' => 'img/signboards/whith_light/es/main.webp',
            'imgMin' => 'img/signboards/whith_light/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/signboards/whith_light/ru/main.webp',
            'imgMin' => 'img/signboards/whith_light/ru/main_.webp',
            ],
            'alt' => 'alt.signboards.whith_light.banner',
            'circle_text' => 'signboards.whith_light.banner.circle_text',
        ];
        $breadCrumbs = [
            'links' => [
            [
            'route' => route('signboards_whith_light', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.signboards_whith_light')
        ];
        return $this->setLocaleAndView($locale, 'signboards-whith-light', compact('banner', 'breadCrumbs'));
    }
}
