<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposStandsController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'expos.stands.banner.title',
            'es' => [
            'imgBig' => 'img/expos/stands/es/Fabricacion-de-stand-de-ferias-eventos-en-barcelona.webp',
            'imgMin' => 'img/expos/stands/es/Fabricacion-de-stand-de-ferias-eventos-en-barcelona_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/stands/ru/Изготовление-стендов-для-ивентов-выставок-и-меропрития-в-барселоне.webp',
            'imgMin' => 'img/expos/stands/ru/Изготовление-стендов-для-ивентов-выставок-и-меропрития-в-барселоне_.webp',
            ],
            'alt' => 'alt.expos.stands.banner',
            'circle_text' => 'expos.stands.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.expos_stands')
        ];

        $typesTitleLangDir = 'img/expos/stands/es/types/';
        $typesDirRu = 'img/expos/stands/ru/types/';
        $typesImgTitleLangDir = 'expos.stands.types.image_titles';
        $types = [
            'title' => 'expos.stands.types.title',
            'text' => 'expos.stands.types.text',
            'btn_prefix' => 'types-',
            'slides' => [
                [
                    'es' => $typesTitleLangDir .  'Stand-modular.webp',
                    'ru' => $typesDirRu .  'модульный-стенд.webp',
                    'title' => $typesImgTitleLangDir . '.1',
                    'alt' => $typesImgTitleLangDir . '.alt_1',
                ],
                [
                    'es' => $typesTitleLangDir .  'Estandart.webp',
                    'ru' => $typesDirRu .  'стандартные-стенды.webp',
                    'title' => $typesImgTitleLangDir . '.2',
                    'alt' => $typesImgTitleLangDir . '.alt_2',
                ],
                [
                    'es' => $typesTitleLangDir .  'Promostands.webp',
                    'ru' => $typesDirRu .  'промо-стенды.webp',
                    'title' => $typesImgTitleLangDir . '.3',
                    'alt' => $typesImgTitleLangDir . '.alt_3',
                ],
                [
                    'es' => $typesTitleLangDir .  'Stands-exclusivos.webp',
                    'ru' => $typesDirRu .  'эксклюзиваные-стенды.webp',
                    'title' => $typesImgTitleLangDir . '.4',
                    'alt' => $typesImgTitleLangDir . '.alt_4',
                ],
            ],
        ];

        return $this->setLocaleAndView($locale, 'expos-stands', compact('banner', 'breadCrumbs', 'types'));
    }
}
