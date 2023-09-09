<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposRollUpController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'expos.rollup.banner.title',
            'es' => [
            'imgBig' => 'img/expos/rollup/es/main.webp',
            'imgMin' => 'img/expos/rollup/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/rollup/ru/main.webp',
            'imgMin' => 'img/expos/rollup/ru/main_.webp',
            ],
            'alt' => 'alt.expos.rollup.banner',
            'circle_text' => 'expos.rollup.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.expos_rollup')
        ];

        $types = [
            'title' => 'expos.rollup.types.title',
            'text' => 'expos.rollup.types.text',
            'img' => [
                [
                'es' => 'img/expos/rollup/es/types/1.webp',
                'ru' => 'img/expos/rollup/ru/types/1.webp',
                'img_title' => 'expos.rollup.types.img.1',
                'alt' => 'expos.rollup.types.img.alt_1',
                ],
                [
                'es' => 'img/expos/rollup/es/types/2.webp',
                'ru' => 'img/expos/rollup/ru/types/2.webp',
                'img_title' => 'expos.rollup.types.img.2',
                'alt' => 'expos.rollup.types.img.alt_2',
                ],
            ],
        ];

        return $this->setLocaleAndView($locale, 'expos-roll-up', compact('banner', 'breadCrumbs', 'types'));
    }
}
