<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsWithLightController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'signboards.whith_light.banner.title',
            'es' => [
            'imgBig' => 'img/signboards/whith_light/es/Rotulo-con-bandeja-luminosa-prouccion-en-Barcelona.webp',
            'imgMin' => 'img/signboards/whith_light/es/Rotulo-con-bandeja-luminosa-prouccion-en-Barcelona_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/signboards/whith_light/ru/Световой-лайтбокс-из-акрилата-для-магазина-Rewers.webp',
            'imgMin' => 'img/signboards/whith_light/ru/Световой-лайтбокс-из-акрилата-для-магазина-Rewers_.webp',
            ],
            'alt' => 'alt.signboards.whith_light.banner',
            'circle_text' => 'signboards.whith_light.banner.circle_text',
        ];
        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.signboards_whith_light')
        ];

        $variantsDirEs = 'img/signboards/whith_light/es/variants/';
        $variantsDirRu = 'img/signboards/whith_light/ru/variants/';
        $variantsImgTitleLangDir = 'signboards.whith_light.variants.image_titles';
        $variants = [
            'title' => 'signboards.whith_light.variants.title',
            'text' => '',
            'spaceBetween' => '20',
            'btn_prefix' => 'variants-',
            'slides' => [
                [
                    'es' => $variantsDirEs .  '1.webp',
                    'ru' => $variantsDirRu .  '1.webp',
                    'title' => $variantsImgTitleLangDir . '.1',
                    'alt' => '',
                    'height' => '',
                ],
                [
                    'es' => $variantsDirEs .  '2.webp',
                    'ru' => $variantsDirRu .  '2.webp',
                    'title' => $variantsImgTitleLangDir . '.2',
                    'alt' => '',
                    'height' => '',
                ],
                [
                    'es' => $variantsDirEs .  '3.webp',
                    'ru' => $variantsDirRu .  '3.webp',
                    'title' => $variantsImgTitleLangDir . '.3',
                    'alt' => '',
                    'height' => '',
                ],
            ],
        ];

        $thiknes = [
            'title' => 'signboards.whith_light.thiknes.title',
            'text' => 'signboards.whith_light.thiknes.text',
            'img' => [
                [
                'es' => 'img/signboards/whith_light/es/thiknes/Rotulos-de-8-cm-de-grosor.webp',
                'ru' => 'img/signboards/whith_light/ru/thiknes/световой-лайбокс-8-см-глубиной.webp',
                'img_title' => 'signboards.whith_light.thiknes.img.1',
                'alt' => '',
                ],
                [
                'es' => 'img/signboards/whith_light/es/thiknes/Rotulos-de-grosor-de-12mm.webp',
                'ru' => 'img/signboards/whith_light/ru/thiknes/световой-лайбокс-12-см-глубиной.webp',
                'img_title' => 'signboards.whith_light.thiknes.img.2',
                'alt' => '',
                ],
            ],
        ];

        $backlight = [
            'title' => 'signboards.whith_light.backlight.title',
            'text' => 'signboards.whith_light.backlight.text',
            'img' => [
                [
                'es' => 'img/signboards/whith_light/es/backlight/led-modelos-para-rotulos-luminosos.webp',
                'ru' => 'img/signboards/whith_light/ru/backlight/светодиоды-модули-для-изготовления-наружной-рекламы.webp',
                'img_title' => 'signboards.whith_light.backlight.img.1',
                'alt' => '',
                ],
                [
                'es' => 'img/signboards/whith_light/es/backlight/luz-para-rotulos-exteriores.webp',
                'ru' => 'img/signboards/whith_light/ru/backlight/Наружные-лампы-для-подсветки.webp',
                'img_title' => 'signboards.whith_light.backlight.img.2',
                'alt' => '',
                ],
            ],
        ];

        $materialTitleLangDir = 'img/signboards/whith_light/es/material/';
        $materialDirRu = 'img/signboards/whith_light/ru/material/';
        $materialImgTitleLangDir = 'signboards.whith_light.material.image_titles';
        $material = [
            'title' => 'signboards.whith_light.material.title',
            'text' => 'signboards.whith_light.material.text',
            'btn_prefix' => 'material-',
            'slides' => [
                [
                    'es' => $materialTitleLangDir .  'pcv-material-rotulos.webp',
                    'ru' => $materialDirRu .  'пвх-материал-для-вывесок.webp',
                    'title' => $materialImgTitleLangDir . '.1',
                    'alt' => '',
                ],
                [
                    'es' => $materialTitleLangDir .  'metacrilat.webp',
                    'ru' => $materialDirRu .  'акрилат-материал-для-изготовления-вывесок.webp',
                    'title' => $materialImgTitleLangDir . '.2',
                    'alt' => '',
                ],
                [
                    'es' => $materialTitleLangDir .  'madera.webp',
                    'ru' => $materialDirRu .  'дерево.webp',
                    'title' => $materialImgTitleLangDir . '.3',
                    'alt' => '',
                ],
                [
                    'es' => $materialTitleLangDir .  'Meterial-dibond-para-rotulos-letreros.webp',
                    'ru' => $materialDirRu .  'алюминий-материал-для-изготовления-вывесок.webp',
                    'title' => $materialImgTitleLangDir . '.4',
                    'alt' => '',
                ],
            ],
        ];

        $portfolioDirEs = 'img/signboards/whith_light/es/portfolio/';
        $portfolioDirRu = 'img/signboards/whith_light/ru/portfolio/';
        $portfolioLocaleAltPath = 'alt.signboards.whith_light.portfolio.';
        //$portfolioLocaleTitlePath = 'portfolio.letters.';
        $portfolioImages = [
            'gallery-image-path' => 'signboards/whith_light/es/portfolio/gallery',
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letrero-de-dibond-sepillado-fresado.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Световая-вывеска-из-композита-с-фрезерной-резкой-и-золотой-пленкой.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '1',
                'title' => $portfolioLocaleAltPath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Caja-luminosa-de-metacrilato.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Лайтбокс-из-акрилата-с-виниловой-пленкой-и-подсветкой.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleAltPath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulo-con-letras-de-pvc-uliminados-exterior.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-из-композита-с-обьемными-буквами-19-мм.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleAltPath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Cajon-de-dibond-fresado-con-letras-20-mm.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Наружная-световая-вывески-из-черного-композита-с-буквами-20-мм.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleAltPath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Calon-de-composite-fresado-iluminado.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'световая-вывеска-из-композита-с-резкой-и-подсветкой-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleAltPath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Caja-de-luz-fresada-iluminada.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Наружная-реклама-из-черного-композита-и-внутренней-подсветкой.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleAltPath . '6',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulo-luminoso-de-metacrilato.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Заказать-световой-лайтбокс-из-акрилата-для-салона-красоты-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '7',
                'title' => $portfolioLocaleAltPath . '7',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulo-con-luz-de-metacrilato.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Рекламная-вывеска-со-светом-для-винного-магазина.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '8',
                'title' => $portfolioLocaleAltPath . '8',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Cajon-de-dibond-fresado-iluminado.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Короб-из-алюминия-с-фрезерной-резкой-и-подсветкой.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '9',
                'title' => $portfolioLocaleAltPath . '9',
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'signboards.whith_light.questions.' . $i . '.question',
                'answer' => 'signboards.whith_light.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'signboards-whith-light', compact('banner', 'breadCrumbs', 'questions', 'portfolioImages', 'variants', 'material', 'thiknes', 'backlight'));
    }
}
