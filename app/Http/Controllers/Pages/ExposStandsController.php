<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposStandsController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'expos.stands.banner.title',
            'es' => [
            'imgBig' => 'img/expos/stands/es/Fabricacion-de-stand-de-ferias-eventos-en-barcelona.webp',
            'imgMin' => 'img/expos/stands/es/Fabricacion-de-stand-de-ferias-eventos-en-barcelona_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/stands/ru/Изготовление-стендов-для-ивентов-выставок-и-меропрития-в-барселоне.webp',
            'imgMin' => 'img/expos/stands/ru/Изготовление-стендов-для-ивентов-выставок-и-меропрития-в-барселоне_.webp',
            ],
            'alt' => 'alt.expos.stands.banner',
            'circle_text' => 'expos.stands.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.expos_stands')
        ];

        $typesTitleLangDir = 'img/expos/stands/es/types/';
        $typesDirRu = 'img/expos/stands/ru/types/';
        $typesImgTitleLangDir = 'expos.stands.types.image_titles';
        $types = [
            'title' => 'expos.stands.types.title',
            'text' => 'expos.stands.types.text',
            'btn_prefix' => 'types-',
            'slides' => [
                [
                    'es' => $typesTitleLangDir .  'Producción-de-stands-modulares-para-exposiciones-y-eventos-en-España.webp',
                    'ru' => $typesDirRu .  'Изготовление-модульных-стендов-на-выставки-и-ивенты-в-Испании.webp',
                    'title' => $typesImgTitleLangDir . '.1',
                    'alt' => $typesImgTitleLangDir . '.alt_1',
                ],
                [
                    'es' => $typesTitleLangDir .  'Stands-de-ferias-estandar-para-eventos-fabricados-en-espana.webp',
                    'ru' => $typesDirRu .  'Стандартные-выставочные-стенды-для-мероприятий-изготвление-в-испании.webp',
                    'title' => $typesImgTitleLangDir . '.2',
                    'alt' => $typesImgTitleLangDir . '.alt_2',
                ],
                [
                    'es' => $typesTitleLangDir .  'Stands-promocionales-modulares-fabricación-en-Barcelona.webp',
                    'ru' => $typesDirRu .  'Промо-стенды-под-стенды-конструкторы-изготовление-в-барселоне.webp',
                    'title' => $typesImgTitleLangDir . '.3',
                    'alt' => $typesImgTitleLangDir . '.alt_3',
                ],
                [
                    'es' => $typesTitleLangDir .  'Fabricación-de-stands-de-publicidad-y-exposiciones-exclusivos-para-eventos-y-exposiciones.webp',
                    'ru' => $typesDirRu .  'Изгтовление-эклюзивных-рекламных-и-выставочных-стендов-на-ивенты-и-выставки.webp',
                    'title' => $typesImgTitleLangDir . '.4',
                    'alt' => $typesImgTitleLangDir . '.alt_4',
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

        return $this->setLocaleAndView($locale, 'expos-stands', compact('banner', 'breadCrumbs', 'types', 'portfolioImages', 'questions'));
    }
}
