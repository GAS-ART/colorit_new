<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsLightboxController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'signboards.lightbox.banner.title',
            'es' => [
            'imgBig' => 'img/signboards/сomposite_lightbox/es/Bandeja-calada-iluminada-por-dentro-para-tienda-de-chocolate-en-Barcelona.webp',
            'imgMin' => 'img/signboards/сomposite_lightbox/es/Bandeja-calada-iluminada-por-dentro-para-tienda-de-chocolate-en-Barcelona_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/signboards/сomposite_lightbox/ru/Вывеска-из-композита-золотого-с-подсветкой-для-бутика-шоколада.webp',
            'imgMin' => 'img/signboards/сomposite_lightbox/ru/Вывеска-из-композита-золотого-с-подсветкой-для-бутика-шоколада_.webp',
            ],
            'alt' => 'alt.signboards.lightbox.banner',
            'circle_text' => 'signboards.lightbox.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.lightbox')
        ];

        $material = [
            'title' => 'signboards.lightbox.material.title',
            'text' => 'signboards.lightbox.material.text',
            'es' => 'img/signboards/сomposite_lightbox/es/material/dibond-de-color-plata-para-rotulos-en-barcelona.webp',
            'ru' => 'img/signboards/сomposite_lightbox/ru/material/композит-серебро-для-изготовление-наружной-рекламы.webp',
            'alt' => 'alt.signboards.lightbox.material',
        ];

        $typesDirEs = 'img/signboards/сomposite_lightbox/es/types/';
        $typesDirRu = 'img/signboards/сomposite_lightbox/ru/types/';
        $typesLocaleAltPath = 'alt.signboards.lightbox.types.';
        $typesLocaleTitleImagePath = 'signboards.lightbox.types.img_titles.';
        $types = [
            'title' => 'signboards.lightbox.types.title',
            'text' => 'signboards.lightbox.types.text',
            'images' => [
                [
                    'es' => $typesDirEs . 'material-composite-negro-mate-para-bandeja-calada.webp',
                    'ru' => $typesDirRu . 'черный-композит-для-изготовление-световых-вывесок-и-лайтбоксов.webp',
                    'alt' => $typesLocaleAltPath . '1',
                    'title' => $typesLocaleTitleImagePath . '1',
                ],
                [
                    'es' => $typesDirEs . 'rotulo-de-dibond-blanco-con-acabado-brillo.webp',
                    'ru' => $typesDirRu . 'белый-композит-для-изготовление-световых-вывесок-и-лайтбоксов.webp',
                    'alt' => $typesLocaleAltPath . '2',
                    'title' => $typesLocaleTitleImagePath . '2',
                ],
                [
                    'es' => $typesDirEs . 'letrero-de-composite-de-color-plata-en-barcelona.webp',
                    'ru' => $typesDirRu . 'композит-серебрянный-для-изготовление-световых-вывесок.webp',
                    'alt' => $typesLocaleAltPath . '3',
                    'title' => $typesLocaleTitleImagePath . '3',
                ],
                [
                    'es' => $typesDirEs . 'Rotulos-brillantes-de-composite-plata-cepillado-en-barcelona.webp',
                    'ru' => $typesDirRu . 'вывеска-из-композита-серебро-браш-со-светом-в-барселоне.webp',
                    'alt' => $typesLocaleAltPath . '4',
                    'title' => $typesLocaleTitleImagePath . '4',
                ],
                [
                    'es' => $typesDirEs . 'Rotulos-bonitos-de-composite-dorado-cepillado-en-barcelona.webp',
                    'ru' => $typesDirRu . 'изготовление-вывесок-из-золотого-композита-на-заказ.webp',
                    'alt' => $typesLocaleAltPath . '5',
                    'title' => $typesLocaleTitleImagePath . '5',
                ],
            ],
        ];

        $led = [
            'title' => 'signboards.lightbox.led.title',
            'text' => 'signboards.lightbox.led.text',
            'es' => 'img/signboards/сomposite_lightbox/es/led/1.webp',
            'ru' => 'img/signboards/сomposite_lightbox/ru/led/1.webp',
            'alt' => '',
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
                'question' => 'signboards.lightbox.questions.' . $i . '.question',
                'answer' => 'signboards.lightbox.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'signboards-lightbox', compact('questions', 'banner', 'breadCrumbs', 'portfolioImages', 'material', 'types', 'led'));
    }
}
