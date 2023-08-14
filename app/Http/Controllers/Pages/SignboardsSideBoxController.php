<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsSideBoxController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'signboards.side_box.banner.title',
            'es' => [
            'imgBig' => 'img/signboards/side_box/es/Banderola-de-metacrilato-dos-caras-ilumanados.webp',
            'imgMin' => 'img/signboards/side_box/es/Banderola-de-metacrilato-dos-caras-ilumanados_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/signboards/side_box/ru/Лайтбокс-из-молочного-акрилата-с-внутренней-подсветкой.webp',
            'imgMin' => 'img/signboards/side_box/ru/Лайтбокс-из-молочного-акрилата-с-внутренней-подсветкой_.webp',
            ],
            'alt' => 'alt.signboards.side_box.banner',
            'circle_text' => 'signboards.side_box.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.side_box')
        ];

        $portfolioDirEs = 'img/signboards/сomposite_lightbox/es/portfolio/';
        $portfolioDirRu = 'img/signboards/сomposite_lightbox/ru/portfolio/';
        $portfolioLocaleAltPath = 'alt.signboards.lightbox.portfolio.';
        //$portfolioLocaleTitlePath = 'portfolio.letters.';
        $portfolioImages = [
            'gallery-image-path' => 'signboards/сomposite_lightbox/es/portfolio/gallery',
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulo-de-dibond-dorado-cepillado-fresado-con-iluminacion.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-из-золотого-композита-с-внутренней-подсветкой-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '1',
                'title' => $portfolioLocaleAltPath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letreros-con-cajon-de-aliminio-con-letras-corporeas.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Наружная-вывеска-со-светом-для-агентства-недвижимости-в-Аликанте.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleAltPath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Bandeja-calada-con-letras-corporeas-20mm-en-Barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Короб-из-черного-матового-композита-с-подсветкой-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleAltPath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Cajon-fresado-para-salon-de-belleza-iluminado.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Лайтбокс-с-фрезерной-резкой-подсветка-внутренняя-для-салона-красоты.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleAltPath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letrero-de-dibond-con-la-luz-interior-para-salon-de-belleza.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-для-салона-красоты-из-алюминия-с-внутренеей-подсветкой.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleAltPath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-corporeas-con-base-de-dibond-fabricacado-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Обьемные-буквы-на-основе-из-композита-с-подсветкой-для-агентств-недвижимости.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleAltPath . '6',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulo-exterior-luminoso-con-cajon-fresado-para-restaurante-en-sitges.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-со-светом-для-рестораннов-и-баров-в-Ситжес.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '7',
                'title' => $portfolioLocaleAltPath . '7',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'letrero-de-metacrilato-iluminado-por-dentro-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Лайтбокс-из-акрилата-с-подсветкой-изготовление-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '8',
                'title' => $portfolioLocaleAltPath . '8',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'rotulo-con-bandeja-calada-de-dibond-cepillado-para-clinica-estetica.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Наружная-вывеска-из-серебрянного-композита-с-обьемными-буквами-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '9',
                'title' => $portfolioLocaleAltPath . '9',
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'signboards.side_box.questions.' . $i . '.question',
                'answer' => 'signboards.side_box.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'signboards-side-box', compact('questions', 'banner', 'breadCrumbs', 'portfolioImages'));
    }
}
