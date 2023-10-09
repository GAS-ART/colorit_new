<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsWithoutLightController extends SetLangAndViewController
{
    public function index($locale) 
    {
        $banner = [
            'title' => 'signboards.whithout_light.banner.title',
            'es' => [
            'imgBig' => 'img/signboards/whithout_light/es/Rotulo-sin-luz-de-PVC-10-mm-con-estructura-metalica.webp',
            'imgMin' => 'img/signboards/whithout_light/es/Rotulo-sin-luz-de-PVC-10-mm-con-estructura-metalica_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/signboards/whithout_light/ru/Вывеска-без-света-из-пвх-10-мм-с-металлической-конструкцией.webp',
            'imgMin' => 'img/signboards/whithout_light/ru/Вывеска-без-света-из-пвх-10-мм-с-металлической-конструкцией_.webp',
            ],
            'alt' => 'alt.signboards.whithout_light.banner',
            'circle_text' => 'signboards.whithout_light.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.signboards_whithout_light')
        ];

        $material = [
            'title' => 'signboards.whithout_light.material.title',
            'text' => 'signboards.whithout_light.material.text',
            'img' => [
                [
                'es' => 'img/signboards/whithout_light/es/material/1.webp',
                'ru' => 'img/signboards/whithout_light/ru/material/1.webp',
                'img_title' => __('signboards.whithout_light.material.img_1_title'),
                'alt' => '',
                ],
                [
                'es' => 'img/signboards/whithout_light/es/material/2.webp',
                'ru' => 'img/signboards/whithout_light/ru/material/2.webp',
                'img_title' => 'signboards.whithout_light.material.img_2_title',
                'alt' => '',
                ],
            ],
        ];

        $mounts = [
            'title' => 'signboards.whithout_light.mounts.title',
            'text' => 'signboards.whithout_light.mounts.text',
            'img' => [
                [
                'es' => 'img/signboards/whithout_light/es/mounts/1.webp',
                'ru' => 'img/signboards/whithout_light/ru/mounts/1.webp',
                'img_title' => __('signboards.whithout_light.mounts.img_1_title'),
                'alt' => '',
                ],
                [
                'es' => 'img/signboards/whithout_light/es/mounts/2.webp',
                'ru' => 'img/signboards/whithout_light/ru/mounts/2.webp',
                'img_title' => 'signboards.whithout_light.mounts.img_2_title',
                'alt' => '',
                ],
            ],
        ];

        $portfolioDirEs = 'img/signboards/whithout_light/es/portfolio/';
        $portfolioDirRu = 'img/signboards/whithout_light/ru/portfolio/';
        $portfolioLocaleAltPath = 'alt.signboards.whithout_light.portfolio.';
        //$portfolioLocaleTitlePath = 'portfolio.letters.';
        $portfolioImages = [
            'gallery-image-path' => 'signboards/whithout_light/es/portfolio/gallery',
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulo-de-metacrilato-10-mm-con-impresion-digital-en-Barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-из-метакрилата-с-винилом.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '1',
                'title' => $portfolioLocaleAltPath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letrero-exterior-con-impresion-digital-en-pvc-para-salon-de-belleza.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-для-салона-красоты-с-печать-на-пвх-пластике.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleAltPath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rótulo-exterior-con-diseño-espectacular-para-salón-de-belleza.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Наружная-реклама-из-пвх-для-салона-красоты.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleAltPath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Cartel-exterior-de-pvc-5-mm-para-restaurante-en-Barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-их-пвх-5-мм-и-алюминиевой-конструкции-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleAltPath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Fabricacion-de-letrero-de-aluminio-con-vinilo-colocado-para-escuela-ucraniana-en-Barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Изготовление-наружной-металлической-вывески-для-украинской-школы-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleAltPath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Produccion-letrero-de-metacrilato-brillo-negro-con-acabado-dorado.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-из-глянцевого-акрила-10-мм-и-поклееной-золотой-пленкой-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleAltPath . '6',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulo-de-PVC-10-mm-con-impresion-digital-y-estructura-de-metal.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Уф-печать-на-пвх-10-мм-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '7',
                'title' => $portfolioLocaleAltPath . '7',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Fabricamos-rotulos-de-metacrilato-con-impresion-digital.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-из-конструкции-и-уф-печати-на-акрилате-5-мм-для-рыбногом-магазина.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '8',
                'title' => $portfolioLocaleAltPath . '8',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Produccion-de-letrero-metalico-con-impresion-para-salon-de-belleza.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Алюминиевый-короб-с-поклееной-виниловой-пленкой-для-салона-красоты-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '9',
                'title' => $portfolioLocaleAltPath . '9',
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'signboards.whithout_light.questions.' . $i . '.question',
                'answer' => 'signboards.whithout_light.questions.' . $i . '.answer',
            ];
        }
        return $this->setLocaleAndView($locale, 'signboards-whithout-light', compact('banner', 'breadCrumbs', 'material', 'mounts', 'portfolioImages', 'questions'));
    }
}
