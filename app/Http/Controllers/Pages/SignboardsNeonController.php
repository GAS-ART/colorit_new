<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsNeonController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'signboards.neon.banner.title',
            'es' => [
            'imgBig' => 'img/signboards/neon/es/Produccion-neon-personalizado-con-metacrilato-transparente.webp',
            'imgMin' => 'img/signboards/neon/es/Produccion-neon-personalizado-con-metacrilato-transparente_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/signboards/neon/ru/Изготовление-вывески-из-неона-с-акриловый-прозрачным-фоном.webp',
            'imgMin' => 'img/signboards/neon/ru/Изготовление-вывески-из-неона-с-акриловый-прозрачным-фоном_.webp',
            ],
            'alt' => 'alt.signboards.neon.banner',
            'circle_text' => 'signboards.neon.banner.circle_text',
        ];

        $material = [
            'title' => 'signboards.neon.material.title',
            'text' => 'signboards.neon.material.text',
            'img' => [
                [
                'es' => 'img/signboards/neon/es/material/Neon-personalizado-con-base-de-metacrilato-5-mm-Garantía-de-calidad.webp',
                'ru' => 'img/signboards/neon/ru/material/Неон-для-салона-красоты-в-Барселоне.-Гибкая-трубка-и-яркий-дизайн.webp',
                'img_title' => 'signboards.neon.material.img.1',
                'alt' => 'signboards.neon.material.img.alt_1',
                ],
                [
                'es' => 'img/signboards/neon/es/material/Neon-para-una-IT-feria-en-Barcelona.-Neon-de-color-rosa-con-base-de-metacrilato-5-mm.webp',
                'ru' => 'img/signboards/neon/ru/material/Неон-для-IT-выставки-в-Барселоне.-Розовый-гибкий-неон-на-базе-прозрачного-акрилата-5-мм.webp',
                'img_title' => 'signboards.neon.material.img.2',
                'alt' => 'signboards.neon.material.img.alt_2',
                ],
            ],
        ];

        $mounts = [
            'title' => 'signboards.neon.mounts.title',
            'text' => 'signboards.neon.mounts.text',
            'img' => [
                [
                'es' => 'img/signboards/neon/es/mounts/1.webp',
                'ru' => 'img/signboards/neon/ru/mounts/1.webp',
                'img_title' => 'signboards.neon.mounts.img.1',
                'alt' => 'signboards.neon.mounts.img.alt_1',
                ],
                [
                'es' => 'img/signboards/neon/es/mounts/2.webp',
                'ru' => 'img/signboards/neon/ru/mounts/2.webp',
                'img_title' => 'signboards.neon.mounts.img.2',
                'alt' => 'signboards.neon.mounts.img.alt_2',
                ],
            ],
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.neon')
        ];

        $portfolioDirEs = 'img/signboards/neon/es/portfolio/';
        $portfolioDirRu = 'img/signboards/neon/ru/portfolio/';
        $portfolioLocaleAltPath = 'alt.signboards.neon.portfolio.';
        //$portfolioLocaleTitlePath = 'portfolio.letters.';
        $portfolioImages = [
            'gallery-image-path' => 'signboards/neon/es/portfolio/gallery',
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulo-neon-para-salon-de-belleza-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Неоновая-вывеска-для-салона-красоты-из-акрилата-5мм.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '1',
                'title' => $portfolioLocaleAltPath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letrero-de-neon-de-metacrilato-5-mm-para-evento-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-неон-для-презентации-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleAltPath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Alas-de-neon-con-color-calido-para-un-bar-de-shisha.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Неоновые-крылья-для-кальянного-ресторана-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleAltPath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulo-de-neon-azul-con-metacrilato-de-5-mm.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Синия-неоновая-вывеска-из-прозрачного-акрила-для-барберshopa-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleAltPath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letrero-neon-flexible-para-salon-de-belleza-en-españa.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-из-неона-для-салона-красоты-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleAltPath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Neones-personalizados-para-negocios-fabricacion-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Яркие-неоновые-вывески-для-бизнеса-в-испании-с-доставкой-на-дом.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleAltPath . '6',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulos-de-neon-flexible-para-salon-de-belleza.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывески-из-гибкого-неона-для-академии-красоты-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '7',
                'title' => $portfolioLocaleAltPath . '7',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Cartel-neon-flexible-para-restaurante-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Вывеска-неоновая-из-акрилата-прозрачного-для-кафе.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '8',
                'title' => $portfolioLocaleAltPath . '8',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Neones-personalizados-de-diferentes-colores-para-negocios.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Стильные-неоновые-вывески-для-баров-и-ресторанов.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '9',
                'title' => $portfolioLocaleAltPath . '9',
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'signboards.neon.questions.' . $i . '.question',
                'answer' => 'signboards.neon.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'signboards-neon', compact('banner', 'breadCrumbs', 'material', 'portfolioImages', 'mounts', 'questions'));
    }
}
