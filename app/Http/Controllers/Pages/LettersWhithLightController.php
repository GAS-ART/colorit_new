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
            'alt' => 'alt.letters.whith_light.baner',
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
        $portfolioDirEs = 'img/portfolio/es/';
        $portfolioDirRu = 'img/portfolio/ru/';
        $portfolioLocaleAltPath = 'alt.letters.portfolio.';
        $portfolioLocaleTitlePath = 'portfolio.letters.';
        $portfolioImages = [
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-de-pvc-10-мм-para-salon-de-belleza.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-вырезанные-из-пвх-10-мм-для-салона-красоты.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '1',
                'title' => $portfolioLocaleTitlePath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-corpóreas-de-pvc-para-ferias.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-обьемные-из-пвх-для-выставок.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleTitlePath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-volumetricas-negras-para-fachada.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-черные-из-оргстекла-для-фасада.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleTitlePath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-corpóreas-30-mm-de-pvc-con-acabado-brillo.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-обьемные-30-мм-из-пвх-с-фронтальными-накладками-из-глянцевого-акрила.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleTitlePath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-corpóreas-de-pvc-con-frente-metacrilato-brillo.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-для-выставки-из-черного-зеркального-акрила.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleTitlePath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-interiores-de-metacrilato-pintados-en-color-naranja.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-для-внутреннего-интерьера-из-акрилата-оранжевого-цвета.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleTitlePath . '6',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-para-letrero-de-pvc-19mm.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Буквы-для-вывески-из-черного-пвх-19мм.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '7',
                'title' => $portfolioLocaleTitlePath . '7',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-para-pared-de-metacrilato-19mm.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Объемные-буквы-на-стену-из-черного-пластика-19-мм.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '8',
                'title' => $portfolioLocaleTitlePath . '8',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-volumétricas-blancas-de-pvc30mm-con-separadores.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Обьемные-буквы-30мм-с-креплениями.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '9',
                'title' => $portfolioLocaleTitlePath . '9',
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
