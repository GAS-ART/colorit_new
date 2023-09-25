<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposBadgesController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'expos.badges.banner.title',
            'es' => [
            'imgBig' => 'img/expos/badges/es/Deja una solicitud para pedir roll up.webp',
            'imgMin' => 'img/expos/badges/es/Deja una solicitud para pedir roll up_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/badges/ru/Бейджик-с-именными-карточками-для-ивент-мероприятий-и-фекстивалей.webp',
            'imgMin' => 'img/expos/badges/ru/Бейджик-с-именными-карточками-для-ивент-мероприятий-и-фекстивалей_.webp',
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

        $types2Img = [
            'title' => 'expos.badges.types2Img.title',
            'text' => 'expos.badges.types2Img.text',
            'img' => [
                [
                'es' => 'img/expos/badges/es/types/1_.webp',
                'ru' => 'img/expos/badges/ru/types/1_.webp',
                'img_title' => 'expos.badges.types2Img.img.1',
                'alt' => 'expos.badges.types2Img.img.alt_1',
                ],
                [
                'es' => 'img/expos/badges/es/types/2_.webp',
                'ru' => 'img/expos/badges/ru/types/2_.webp',
                'img_title' => 'expos.badges.types2Img.img.2',
                'alt' => 'expos.badges.types2Img.img.alt_2',
                ],
            ],
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
                    'text' => $typesImgTitleLangDir . '1_text',
                    'alt' => $typesImgTitleLangDir . 'alt_1',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  '2.webp',
                    'ru' => $typesDirRu .  '2.webp',
                    'title' => $typesImgTitleLangDir . '2',
                    'text' => $typesImgTitleLangDir . '2_text',
                    'alt' => $typesImgTitleLangDir . 'alt_2',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  '3.webp',
                    'ru' => $typesDirRu .  '3.webp',
                    'title' => $typesImgTitleLangDir . '3',
                    'text' => $typesImgTitleLangDir . '3_text',
                    'alt' => $typesImgTitleLangDir . 'alt_3',
                    'height' => 'h-300',
                ],
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'expos.badges.questions.' . $i . '.question',
                'answer' => 'expos.badges.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'expos-badges', compact('banner', 'breadCrumbs', 'types2Img', 'types', 'questions'));
    }
}
