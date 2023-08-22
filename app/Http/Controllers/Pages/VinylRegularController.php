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

        $types = [
            'title' => 'vinyl.regular.type.title',
            'text' => 'vinyl.regular.type.text',
            'img' => [
                [
                'es' => 'img/vinyl/regular/es/type/1.webp',
                'ru' => 'img/vinyl/regular/ru/type/1.webp',
                'img_title' => 'vinyl.regular.type.img.1',
                'alt' => 'vinyl.regular.type.img.alt_1',
                ],
                [
                'es' => 'img/vinyl/regular/es/type/2.webp',
                'ru' => 'img/vinyl/regular/ru/type/2.webp',
                'img_title' => 'vinyl.regular.type.img.2',
                'alt' => 'vinyl.regular.type.img.alt_2',
                ],
            ],
        ];


        $advantagesImgDir = 'img/vinyl/regular/icons/';
        $advantagesLangDir = 'vinyl.regular.advantages.';
        $advantages = [
            'background_img' => '/img/vinyl/regular/bg.webp',
            'title' => $advantagesLangDir . 'title',
            'cards' => [
                [
                    'img' => $advantagesImgDir . '1.svg',
                    'title' => $advantagesLangDir . '1.title',
                    'text' => $advantagesLangDir . '1.text',
                ],
                [
                    'img' => $advantagesImgDir . '2.svg',
                    'title' => $advantagesLangDir . '2.title',
                    'text' => $advantagesLangDir . '2.text',
                ],
                [
                    'img' => $advantagesImgDir . '3.svg',
                    'title' => $advantagesLangDir . '3.title',
                    'text' => $advantagesLangDir . '3.text',
                ],
                [
                    'img' => $advantagesImgDir . '4.svg',
                    'title' => $advantagesLangDir . '4.title',
                    'text' => $advantagesLangDir . '4.text',
                ],
            ],
        ];

        return $this->setLocaleAndView($locale, 'vinyl-regular', compact('banner', 'breadCrumbs', 'types', 'advantages'));
    }
}
