<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\SetLangAndViewController;

class LettersWhithLightController extends SetLangAndViewController
{
    public function index($locale)
    {
        $banner = [
            'title' => 'letters.whith_light.title',
            'es' => [
            'imgBig' => 'img/letters/es/whith_light/Letras-corpóreas-frente-dorado-espejo-retroiluminadas.webp',
            'imgMin' => 'img/letters/es/whith_light/Letras-corpóreas-frente-dorado-espejo-retroiluminadas_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/letters/ru/whith_light/Буквы-обьемные-зеркальные-накладки-с-подсветкой-контражур.webp',
            'imgMin' => 'img/letters/ru/whith_light/Буквы-обьемные-зеркальные-накладки-с-подсветкой-контражур_.webp',
            ],
            'alt' => 'alt.letters.whith_light.banner',
            'circle_text' => 'letters.whith_light.circle',
        ];
        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => 'crumbs.home',
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => 'crumbs.letters_whith_light',
        ];
        $lights = [
            'title' => 'letters.whith_light.lights.title',
            'text' => 'letters.whith_light.lights.text',
            'img' => [
                [
                'es' => 'img/letters/es/whith_light/lights/Letras-corpóreas-iluminadas.webp',
                'ru' => 'img/letters/ru/whith_light/lights/Обьемные-буквы-с-подсветкой.webp',
                'img_title' => __('letters.whith_light.lights.img.1'),
                'alt' => '',
                ],
                [
                'es' => 'img/letters/es/whith_light/lights/Letras-corpóreas-retroiluminadas.webp',
                'ru' => 'img/letters/ru/whith_light/lights/Объемные-буквы-с-подсветкой-контражур.webp',
                'img_title' => 'letters.whith_light.lights.img.2',
                'alt' => '',
                ],
            ],
        ];
        $mounts = [
            'title' => 'letters.mounts.title',
            'text' => 'letters.mounts.text',
            'img' => [
                [
                'es' => 'img/letters/es/mounts/letras-de-pvc-20-mm-acabado-oro-con-frente-de-alumio.webp',
                'ru' => 'img/letters/ru/mounts/Золотые-буквы-объемные-толщиной-20 мм-из-пвх-с-фронтальным-золотым-алюминием.webp',
                'img_title' => __('letters.mounts.img.1'),
                'alt' => '',
                ],
                [
                'es' => 'img/letters/es/mounts/letras-corporeas-con-separadores.webp',
                'ru' => 'img/letters/ru/mounts/Объемные-буквы-с-дистанцирующими-держателями.webp',
                'img_title' => 'letters.mounts.img.2',
                'alt' => '',
                ],
            ],
        ];
        $portfolioDirEs = 'img/letters/es/whith_light/portfolio/';
        $portfolioDirRu = 'img/letters/ru/whith_light/portfolio/';
        $portfolioLocaleAltPath = 'alt.letters.whith_light.portfolio.';
        //$portfolioLocaleTitlePath = 'portfolio.letters.'; letters/es/whith_light/portfolio/gallery
        $portfolioImages = [
            'gallery-image-path' => 'letters/es/whith_light/portfolio/gallery',
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-volumetricas-retroiluminadas-de-pvc-para-salon-de-belleza.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Золотые-обьемные-буквы-с-подсветкой-из-пвх-для-салона-красоты.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '1',
                'title' => $portfolioLocaleAltPath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-corpóreas-de-pvc-19-mm-con-separadores-fabricados-en-Barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Пвх-буквы-с-подсветкой-19-мм-на креплениях-изготовление-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleAltPath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-corpóreas-pintadas-retroiluminadas-para-restaurante-en-Barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Пвх-буквы-покрашенные-обьемные-с-подсветкой-для-ресторана-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleAltPath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-corpóreas-retroiluminadas-de-metacrilato-con-frente-dorado-en-Barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-обьемные-из-акрилата-с-золотыми-накладками-для-салона-красоты-в-Барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleAltPath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-corpóreas-con-luz-calido-montadas-a-estructura.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Световые-буквы-30-мм-с-подсветкой-на-каркасе.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleAltPath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-de-pvc-negro-grosor-35-mm-con-luz.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-из-черного-пвх-толщиной-35-мм-с-подсветкой.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleAltPath . '6',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-corpóreas-de-color-dorado-con-luz-calido.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-золотого-цвета-с-теплой-фронтальной-подсветкой.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '7',
                'title' => $portfolioLocaleAltPath . '7',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-negras-de-pvc-19-mm-retroiluminadas.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-черные-из-пвх-толщиной-19-мм-и-задней-подсветкой.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '8',
                'title' => $portfolioLocaleAltPath . '8',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-volumetricas-con-acabado-lila-y-luz-trasero.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-обьемные-покрашенные-в-фиолетовые-цвет-и-подсветкой-контражур.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '9',
                'title' => $portfolioLocaleAltPath . '9',
            ],
        ];
        //template for copy
        /* $portfolioImages = [
            [
                'es' => [
                    'src' => $portfolioDirEs . '',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '',
                ],
                'alt' => $portfolioLocaleAltPath . '1',
                'title' => $portfolioLocaleTitlePath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '',
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleTitlePath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '',
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleTitlePath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '',
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleTitlePath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '',
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleTitlePath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '',
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleTitlePath . '6',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '',
                ],
                'alt' => $portfolioLocaleAltPath . '7',
                'title' => $portfolioLocaleTitlePath . '7',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '',
                ],
                'alt' => $portfolioLocaleAltPath . '8',
                'title' => $portfolioLocaleTitlePath . '8',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '',
                ],
                'alt' => $portfolioLocaleAltPath . '9',
                'title' => $portfolioLocaleTitlePath . '9',
            ],
        ]; */
        
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'letters.whith_light.questions.' . $i . '.question',
                'answer' => 'letters.whith_light.questions.' . $i . '.answer',
            ];
        }
        return $this->setLocaleAndView($locale, 'letters-whith-light', compact('banner', 'breadCrumbs', 'lights', 'mounts', 'portfolioImages', 'questions'));
    }
}
