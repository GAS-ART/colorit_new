<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylSandblastFilmController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'vinyl.sandblast_film.banner.title',
            'es' => [
            'imgBig' => 'img/vinyl/sandblast_film/es/main.webp',
            'imgMin' => 'img/vinyl/sandblast_film/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/vinyl/sandblast_film/ru/main.webp',
            'imgMin' => 'img/vinyl/sandblast_film/ru/main_.webp',
            ],
            'alt' => 'alt.vinyl.sandblast_film.banner',
            'circle_text' => 'vinyl.sandblast_film.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.sandblast_film')
        ];

        $typesDirEs = 'img/vinyl/sandblast_film/es/type/';
        $typesDirRu = 'img/vinyl/sandblast_film/ru/type/';
        $typesImgTitleLangDir = 'vinyl.sandblast_film.types.image_titles.';
        $types = [
            'title' => 'vinyl.sandblast_film.types.title',
            'text' => 'vinyl.sandblast_film.types.text',
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

        $advantagesImgDir = 'img/vinyl/sandblast_film/icons/';
        $advantagesLangDir = 'vinyl.sandblast_film.advantages.';
        $advantages = [
            'background_img' => '/img/vinyl/sandblast_film/bg.webp',
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

        return $this->setLocaleAndView($locale, 'vinyl-sandblast-film', compact('banner', 'breadCrumbs', 'types', 'advantages'));
    }
}
