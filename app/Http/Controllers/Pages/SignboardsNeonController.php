<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsNeonController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'signboards.neon.banner.title',
            'es' => [
            'imgBig' => 'img/signboards/neon/es/Produccion-neon-personalizado-con-metacrilato-transparente.webp',
            'imgMin' => 'img/signboards/neon/es/Produccion-neon-personalizado-con-metacrilato-transparente_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/signboards/neon/ru/Изготовление-вывески-из-неона-с-акриловый-прозрачным-фоном.webp',
            'imgMin' => 'img/signboards/neon/ru/Изготовление-вывески-из-неона-с-акриловый-прозрачным-фоном_.webp',
            ],
            'alt' => 'alt.signboards.neon.banner',
            'circle_text' => 'signboards.neon.banner.circle_text',
        ];

        $material = [
            'title' => 'signboards.neon.material.title',
            'text' => 'signboards.neon.material.text',
            'img' => [
                [
                'es' => 'img/signboards/neon/es/material/1.webp',
                'ru' => 'img/signboards/neon/ru/material/1.webp',
                'img_title' => 'signboards.neon.material.img.1',
                'alt' => 'signboards.neon.material.img.alt_1',
                ],
                [
                'es' => 'img/signboards/neon/es/material/2.webp',
                'ru' => 'img/signboards/neon/ru/material/2.webp',
                'img_title' => 'signboards.neon.material.img.2',
                'alt' => 'signboards.neon.material.img.alt_2',
                ],
            ],
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.neon')
        ];

        return $this->setLocaleAndView($locale, 'signboards-neon', compact('banner', 'breadCrumbs', 'material'));
    }
}
