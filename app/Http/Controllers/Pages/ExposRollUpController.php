<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposRollUpController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'expos.rollup.banner.title',
            'es' => [
            'imgBig' => 'img/expos/rollup/es/Roll-up-x-banner-en-barcelona-produciiion-en-1-dia-con-entrega-rapida.webp',
            'imgMin' => 'img/expos/rollup/es/Roll-up-x-banner-en-barcelona-produciiion-en-1-dia-con-entrega-rapida_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/rollup/ru/Ролл-ап-изготовление-в-барселоне-быстро-с-доставкой-по-всей-испании.webp',
            'imgMin' => 'img/expos/rollup/ru/Ролл-ап-изготовление-в-барселоне-быстро-с-доставкой-по-всей-испании_.webp',
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

/*         $types = [
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
        ]; */

        $typesDirEs = 'img/expos/rollup/es/types/';
        $typesDirRu = 'img/expos/rollup/ru/types/';
        $typesImgTitleLangDir = 'expos.rollup.types.image_titles.';
        $types = [
            'title' => 'expos.rollup.types.title',
            'text' => 'expos.rollup.types.text',
            'spaceBetween' => '20',
            'btn_prefix' => 'types-',
            'slides' => [
                [
                    'es' => $typesDirEs .  'La-estructura-de-aluminio-con-montaje-solo-por-5-minutos.webp',
                    'ru' => $typesDirRu .  'Конструкция-ролл-ап-из-алюминия-быстрая-установка-и-демонтаж.webp',
                    'title' => $typesImgTitleLangDir . '1',
                    'alt' => $typesImgTitleLangDir . 'alt_1',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  'Roll-up-montaje-y-prodiccion-rapido-en-españa.webp',
                    'ru' => $typesDirRu .  'Ролл-ап-установка-за-5-минут-изготовление-один-день.webp',
                    'title' => $typesImgTitleLangDir . '2',
                    'alt' => $typesImgTitleLangDir . 'alt_2',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  'x-banner-roll-up-hacer-el-pedido-en-barcelona-con-diseño-perzonalizado.webp',
                    'ru' => $typesDirRu .  'Мобильные-сренды-ролл-ап-уф-печать-на-баннере-изготовление-в-барселоне.webp',
                    'title' => $typesImgTitleLangDir . '3',
                    'alt' => $typesImgTitleLangDir . 'alt_3',
                    'height' => 'h-300',
                ],
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'expos.rollup.questions.' . $i . '.question',
                'answer' => 'expos.rollup.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'expos-roll-up', compact('banner', 'breadCrumbs', 'types', 'questions'));
    }
}
