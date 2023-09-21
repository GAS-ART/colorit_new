<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposBannerController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'expos.banner.banner.title',
            'es' => [
            'imgBig' => 'img/expos/banner/es/main.webp',
            'imgMin' => 'img/expos/banner/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/banner/ru/main.webp',
            'imgMin' => 'img/expos/banner/ru/main_.webp',
            ],
            'alt' => 'alt.expos.banner.banner',
            'circle_text' => 'expos.banner.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.expos_banner')
        ];

/*         $typesDirEs = 'img/expos/banner/es/types/';
        $typesDirRu = 'img/expos/banner/ru/types/';
        $typesImgTitleLangDir = 'expos.banner.types.image_titles.';
        $types = [
            'title' => 'expos.banner.types.title',
            'text' => 'expos.banner.types.text',
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
        ]; */

        $types = [
            'title' => 'expos.banner.types.title',
            'text' => 'expos.banner.types.text',
            'img' => [
                [
                'es' => 'img/expos/banner/es/types/1.webp',
                'ru' => 'img/expos/banner/ru/types/1.webp',
                'img_title' => 'expos.banner.types.image_titles.1',
                'alt' => '',
                ],
                [
                'es' => 'img/expos/banner/es/types/2.webp',
                'ru' => 'img/expos/banner/ru/types/2.webp',
                'img_title' => 'expos.banner.types.image_titles.2',
                'alt' => '',
                ],
            ],
        ];

        $examplesDirEs = 'img/expos/banner/es/examples/';
        $examplesDirRu = 'img/expos/banner/ru/examples/';
        $examplesImgTitleLangDir = 'expos.banner.examples.image_titles.';
        $examples = [
            'title' => 'expos.banner.examples.title',
            'text' => 'expos.banner.examples.text',
            'spaceBetween' => '20',
            'btn_prefix' => 'examples-',
            'slides' => [
                [
                    'es' => $examplesDirEs .  '1.webp',
                    'ru' => $examplesDirRu .  '1.webp',
                    'title' => $examplesImgTitleLangDir . '1',
                    'alt' => $examplesImgTitleLangDir . 'alt_1',
                    'height' => 'h-300',
                ],
                [
                    'es' => $examplesDirEs .  '2.webp',
                    'ru' => $examplesDirRu .  '2.webp',
                    'title' => $examplesImgTitleLangDir . '2',
                    'alt' => $examplesImgTitleLangDir . 'alt_2',
                    'height' => 'h-300',
                ],
                [
                    'es' => $examplesDirEs .  '3.webp',
                    'ru' => $examplesDirRu .  '3.webp',
                    'title' => $examplesImgTitleLangDir . '3',
                    'alt' => $examplesImgTitleLangDir . 'alt_3',
                    'height' => 'h-300',
                ],
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'expos.banner.questions.' . $i . '.question',
                'answer' => 'expos.banner.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'expos-banner', compact('banner', 'breadCrumbs', 'types', 'examples', 'questions'));
    }
}
