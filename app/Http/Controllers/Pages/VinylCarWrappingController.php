<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylCarWrappingController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'vinyl.car_wrapping.banner.title',
            'es' => [
            'imgBig' => 'img/vinyl/car_wrapping/es/main.webp',
            'imgMin' => 'img/vinyl/car_wrapping/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/vinyl/car_wrapping/ru/main.webp',
            'imgMin' => 'img/vinyl/car_wrapping/ru/main_.webp',
            ],
            'alt' => 'alt.vinyl.car_wrapping.banner',
            'circle_text' => 'vinyl.car_wrapping.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.vinyl_car_wrapping')
        ];

        $typesDirEs = 'img/vinyl/car_wrapping/es/type/';
        $typesDirRu = 'img/vinyl/car_wrapping/ru/type/';
        $typesImgTitleLangDir = 'vinyl.car_wrapping.types.image_titles.';
        $types = [
            'title' => 'vinyl.car_wrapping.types.title',
            'text' => 'vinyl.car_wrapping.types.text',
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

        $advantagesImgDir = 'img/vinyl/car_wrapping/icons/';
        $advantagesLangDir = 'vinyl.car_wrapping.advantages.';
        $advantages = [
            'background_img' => '/img/vinyl/car_wrapping/bg.webp',
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

        return $this->setLocaleAndView($locale, 'vinyl-car-wrapping', compact('banner', 'breadCrumbs', 'types', 'advantages'));
    }
}
