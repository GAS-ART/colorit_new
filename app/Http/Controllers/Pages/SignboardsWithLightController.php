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
            'route' => route('signboards_whith_light', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.signboards_whith_light')
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

        return $this->setLocaleAndView($locale, 'signboards-whith-light', compact('banner', 'breadCrumbs', 'questions', 'portfolioImages'));
    }
}
