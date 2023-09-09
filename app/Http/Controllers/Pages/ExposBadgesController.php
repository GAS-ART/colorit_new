<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposBadgesController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'expos.badges.banner.title',
            'es' => [
            'imgBig' => 'img/expos/badges/es/main.webp',
            'imgMin' => 'img/expos/badges/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/badges/ru/main.webp',
            'imgMin' => 'img/expos/badges/ru/main_.webp',
            ],
            'alt' => 'alt.expos.badges.banner',
            'circle_text' => 'expos.badges.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.expos_badges')
        ];

        $typesDirEs = 'img/expos/badges/es/types/';
        $typesDirRu = 'img/expos/badges/ru/types/';
        $typesImgTitleLangDir = 'expos.badges.types.image_titles.';
        $types = [
            'title' => 'expos.badges.types.title',
            'text' => 'expos.badges.types.text',
            'spaceBetween' => '20',
            'btn_prefix' => 'types-',
            'slides' => [
                [
                    'es' => $typesDirEs .  '1.webp',
                    'ru' => $typesDirRu .  '1.webp',
                    'title' => $typesImgTitleLangDir . '1',
                    'alt' => $typesImgTitleLangDir . 'alt_1',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  '2.webp',
                    'ru' => $typesDirRu .  '2.webp',
                    'title' => $typesImgTitleLangDir . '2',
                    'alt' => $typesImgTitleLangDir . 'alt_2',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  '3.webp',
                    'ru' => $typesDirRu .  '3.webp',
                    'title' => $typesImgTitleLangDir . '3',
                    'alt' => $typesImgTitleLangDir . 'alt_3',
                    'height' => 'h-300',
                ],
            ],
        ];

        return $this->setLocaleAndView($locale, 'expos-badges', compact('banner', 'breadCrumbs', 'types'));
    }
}
