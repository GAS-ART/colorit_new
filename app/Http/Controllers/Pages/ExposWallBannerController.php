<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposWallBannerController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'expos.brandwall.banner.title',
            'es' => [
            'imgBig' => 'img/expos/brandwall/es/main.webp',
            'imgMin' => 'img/expos/brandwall/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/brandwall/ru/main.webp',
            'imgMin' => 'img/expos/brandwall/ru/main_.webp',
            ],
            'alt' => 'alt.expos.brandwall.banner',
            'circle_text' => 'expos.brandwall.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.expos_brandwall')
        ];

        $types = [
            'title' => 'expos.brandwall.types.title',
            'text' => 'expos.brandwall.types.text',
            'img' => [
                [
                'es' => 'img/expos/brandwall/es/types/1.webp',
                'ru' => 'img/expos/brandwall/ru/types/1.webp',
                'img_title' => 'expos.brandwall.types.img.1',
                'alt' => 'expos.brandwall.types.img.alt_1',
                ],
                [
                'es' => 'img/expos/brandwall/es/types/2.webp',
                'ru' => 'img/expos/brandwall/ru/types/2.webp',
                'img_title' => 'expos.brandwall.types.img.2',
                'alt' => 'expos.brandwall.types.img.alt_2',
                ],
            ],
        ];
        $typesDirEs = 'img/expos/brandwall/es/types/';
        $typesDirRu = 'img/expos/brandwall/ru/types/';
        $typesImgTitleLangDir = 'expos.brandwall.types3.image_titles.';
        $types3 = [
            'title' => 'expos.brandwall.types3.title',
            'text' => 'expos.brandwall.types3.text',
            'spaceBetween' => '20',
            'btn_prefix' => 'types-',
            'slides' => [
                [
                    'es' => $typesDirEs .  '4.webp',
                    'ru' => $typesDirRu .  '4.webp',
                    'title' => $typesImgTitleLangDir . '1',
                    'alt' => $typesImgTitleLangDir . 'alt_1',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  '5.webp',
                    'ru' => $typesDirRu .  '5.webp',
                    'title' => $typesImgTitleLangDir . '2',
                    'alt' => $typesImgTitleLangDir . 'alt_2',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  '6.webp',
                    'ru' => $typesDirRu .  '6.webp',
                    'title' => $typesImgTitleLangDir . '3',
                    'alt' => $typesImgTitleLangDir . 'alt_3',
                    'height' => 'h-300',
                ],
            ],
        ];
        return $this->setLocaleAndView($locale, 'expos-wall-banner', compact('banner', 'breadCrumbs', 'types', 'types3'));
    }
}
