<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class LettersWhithoutLightController extends SetLangAndViewController
{
    public function index($locale)
    {
        $banner = [
            'title' => 'letters.title',
            'es' => [
            'imgBig' => 'img/letters/es/Letras-córporeas-de-pvc-negro-mate-para-ferias.webp',
            'imgMin' => 'img/letters/es/letras-córporeas-sin-iluminadas.webp',
            ],
            'ru' => [
            'imgBig' => 'img/letters/ru/Объемные-буквы-из-пвх-для-выставки.webp',
            'imgMin' => 'img/letters/ru/Обьемные-буквы-без-света.webp',
            ],
            'alt' => 'alt.letters.banner',
            'circle_text' => 'letters.circle',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.letters')
        ];

        $materialDirEs = 'img/letters/es/material/';
        $materialDirRu = 'img/letters/ru/material/';
        $materialImgTitleLangDir = 'letters.material.img';
        $materialAlt = 'alt.letters.material.';
        $material = [
            'title' => 'letters.material.title',
            'text' => 'letters.material.text_title',
            'btn_prefix' => 'material-',
            'slides' => [
                [
                    'es' => $materialDirEs .  'Fabricacion-letras-corpóreas-de-PVC-en-Barcelona.webp',
                    'ru' => $materialDirRu .  'Изготовление-обьемных-букв-из-PVC-в-Барселоне.webp',
                    'title' => $materialImgTitleLangDir . '.1',
                    'alt' => $materialAlt . '1',
                ],
                [
                    'es' => $materialDirEs .  'Fabricacion-letras-corpóreas-de-madera-en-Barcelona.webp',
                    'ru' => $materialDirRu .  'Изготовление-обьемных-букв-из-дерева-в-Барселоне.webp',
                    'title' => $materialImgTitleLangDir . '.2',
                    'alt' => $materialAlt . '2',
                ],
                [
                    'es' => $materialDirEs .  'Fabricacion-letras-corpóreas-de-metacrilato-en-Barcelona.webp',
                    'ru' => $materialDirRu .  'Изготовление-обьемных-букв-из-оргстекла-в-Барселоне.webp',
                    'title' => $materialImgTitleLangDir . '.3',
                    'alt' => $materialAlt . '3',
                ],
                [
                    'es' => $materialDirEs .  'Fabricacion-letras-corpóreas-de-dibond-en-Barcelona.webp',
                    'ru' => $materialDirRu .  'Изготовление-обьемных-букв-из-композита-в-Барселоне.webp',
                    'title' => $materialImgTitleLangDir . '.4',
                    'alt' => $materialAlt . '4',
                ],
                [
                    'es' => $materialDirEs .  'Fabricacion-letras-corpóreas-de-acero-en-Barcelona.webp',
                    'ru' => $materialDirRu .  'Изготовление-обьемных-букв-из-металла-в-Барселоне.webp',
                    'title' => $materialImgTitleLangDir . '.5',
                    'alt' => $materialAlt . '5',
                ],
            ],
        ];

        $mounts = [
            'title' => 'letters.mounts.title',
            'text' => 'letters.mounts.text',
            'img' => [
            [
            'es' => 'img/letters/es/mounts/letras-de-pvc-20-mm-acabado-oro-con-frente-de-alumio.webp',
            'ru' => 'img/letters/ru/mounts/Золотые-буквы-объемные-толщиной-20-мм-из-пвх-с-фронтальным-золотым-алюминием.webp',
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
            'gallery-image-path' => 'letters/portfolio',
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
        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'letters.questions.' . $i . '.question',
                'answer' => 'letters.questions.' . $i . '.answer',
            ];
        }
        return $this->setLocaleAndView($locale, 'letters-whithout-light', compact('banner', 'breadCrumbs', 'material', 'mounts', 'portfolioImages', 'questions'));
    }
}
