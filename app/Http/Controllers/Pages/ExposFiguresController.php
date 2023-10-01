<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposFiguresController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'expos.figures.banner.title',
            'es' => [
            'imgBig' => 'img/expos/figures/es/Stand-publicitario-exterior-de-pvc-con-estructura-metalica-para-ayuntamiento-de-cervello.webp',
            'imgMin' => 'img/expos/figures/es/Stand-publicitario-exterior-de-pvc-con-estructura-metalica-para-ayuntamiento-de-cervello_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/figures/ru/Рекламный-стенд-фигура-из-пвх-и-металлического-каркаса-для-мерии-в-барселоне.webp',
            'imgMin' => 'img/expos/figures/ru/Рекламный-стенд-фигура-из-пвх-и-металлического-каркаса-для-мерии-в-барселоне_.webp',
            ],
            'alt' => 'alt.expos.figures.banner',
            'circle_text' => 'expos.figures.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.expos_figures')
        ];

        $materialDirEs = 'img/letters/es/material/';
        $materialDirRu = 'img/letters/ru/material/';
        $materialImgTitleLangDir = 'letters.material.img';
        $materialAlt = 'alt.letters.material.';
        $material = [
            'title' => 'expos.figures.material.title',
            'text' => 'expos.figures.material.text',
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

        $portfolioDirEs = 'img/expos/figures/es/portfolio/';
        $portfolioDirRu = 'img/expos/figures/ru/portfolio/';
        $portfolioLocaleAltPath = 'alt.expos.figures.portfolio.';
        $portfolioLocaleTitlePath = 'expos.figures.portfolio.';
        $portfolioImages = [
            'gallery-image-path' => 'expos/figures/es/portfolio/gallery',
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Estructura-decorativa-stans-de-composite-con-figuras-para-estacion-de-tren.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Декоративные-стенды-с-колонами-из-композита-для-вокзала-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '1',
                'title' => $portfolioLocaleTitlePath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Stand-podio-de-estructura-metalica-con-impresion-digital-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Мини-стенд-подиум-из-металлической-структуры-с-прямой-печатью-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleTitlePath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Stand-decorativo-con-letras-corporeas-para-cuidad-cervello.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Уличный-стенд-из-металлической-конструкции-с-обьемными-буквами-для-мэрии-города-сервеьо.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleTitlePath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Letras-volumetricas-exteriores-de-aliminio-para-canet-de-mar.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Обьемные-буквы-из-алюминия-с-подсветкой-для-города-канет-де-мар.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleTitlePath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Arco-decorativo-de-madera-con-impresion-directa-para-campeonato-de-gymnastica-rytmica.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Выставочная-арка-из-фанеры-с-уф-печатью-для-чемпионата-по-спортивной-гимнастике.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleTitlePath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Inmuebles-decorativos-stands-de-ferias-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Выставочная-мебель-декоративные-панели-для-выставки-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleTitlePath . '6',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Fabricacion-de-stands-de-ferias-totems-figuras-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Изготовление-подиумов-мебели-для-выставочных-стендов-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '7',
                'title' => $portfolioLocaleTitlePath . '7',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Stands-con-impresion-digital-para-ferias-y-eventos-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Изготовление-напольных-спонсорских-стендов-для-чемпимоната-по-спортивной-гимнастике-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '8',
                'title' => $portfolioLocaleTitlePath . '8',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Figuras-decorativas-de-pvc-para-eventos-ferias-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Изготовление-фигур-из-пластика-для-ивент-мероприятиый-в-испании.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '9',
                'title' => $portfolioLocaleTitlePath . '9',
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'expos.figures.questions.' . $i . '.question',
                'answer' => 'expos.figures.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'expos-figures', compact('banner', 'breadCrumbs', 'material', 'backlight', 'portfolioImages', 'questions'));
    }
}
