<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposClothingController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'expos.clothes.banner.title',
            'es' => [
            'imgBig' => 'img/expos/clothes/es/main.webp',
            'imgMin' => 'img/expos/clothes/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/clothes/ru/main.webp',
            'imgMin' => 'img/expos/clothes/ru/main_.webp',
            ],
            'alt' => 'alt.expos.clothes.banner',
            'circle_text' => 'expos.clothes.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.expos_clothes')
        ];

        $typesDirEs = 'img/expos/clothes/es/types/';
        $typesDirRu = 'img/expos/clothes/ru/types/';
        $typesImgTitleLangDir = 'expos.clothes.types.image_titles.';
        $types = [
            'title' => 'expos.clothes.types.title',
            'text' => 'expos.clothes.types.text',
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

        $examplesTitleLangDir = 'img/expos/clothes/es/examples/';
        $examplesDirRu = 'img/expos/clothes/ru/examples/';
        $examplesImgTitleLangDir = 'expos.clothes.examples.image_titles';
        $examples = [
            'title' => 'expos.clothes.examples.title',
            'text' => 'expos.clothes.examples.text',
            'btn_prefix' => 'examples-',
            'slides' => [
                [
                    'es' => $examplesTitleLangDir .  '1.webp',
                    'ru' => $examplesDirRu .  '1.webp',
                    'title' => $examplesImgTitleLangDir . '.1',
                    'alt' => '',
                ],
                [
                    'es' => $examplesTitleLangDir .  '2.webp',
                    'ru' => $examplesDirRu .  '2.webp',
                    'title' => $examplesImgTitleLangDir . '.2',
                    'alt' => '',
                ],
                [
                    'es' => $examplesTitleLangDir .  '3.webp',
                    'ru' => $examplesDirRu .  '3.webp',
                    'title' => $examplesImgTitleLangDir . '.3',
                    'alt' => '',
                ],
                [
                    'es' => $examplesTitleLangDir .  '4.webp',
                    'ru' => $examplesDirRu .  '4.webp',
                    'title' => $examplesImgTitleLangDir . '.4',
                    'alt' => '',
                ],
            ],
        ];

        return $this->setLocaleAndView($locale, 'expos-clothing', compact('banner', 'breadCrumbs', 'types', 'examples'));
    }
}
