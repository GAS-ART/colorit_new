<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposWallBannerController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'expos.brandwall.banner.title',
            'es' => [
            'imgBig' => 'img/expos/brandwall/es/Photostand-para-it-feria-en-barcelona.webp',
            'imgMin' => 'img/expos/brandwall/es/Photostand-para-it-feria-en-barcelona_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/brandwall/ru/Фотозона-для-it-ивента-в-Барселоне-Быстрая-печать-и-монтаж.webp',
            'imgMin' => 'img/expos/brandwall/ru/Фотозона-для-it-ивента-в-Барселоне-Быстрая-печать-и-монтаж_.webp',
            ],
            'alt' => 'alt.expos.brandwall.banner',
            'circle_text' => 'expos.brandwall.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.expos_brandwall')
        ];

        $types = [
            'title' => 'expos.brandwall.types.title',
            'text' => 'expos.brandwall.types.text',
            'img' => [
                [
                'es' => 'img/expos/brandwall/es/types/Pedir-photocall-en-barcelona-rapido-con-entrega.webp',
                'ru' => 'img/expos/brandwall/ru/types/Брендволы-фотозоны-изготовление-под-заказ-в-Барселоне.-Изготовление-и-доставка-по-всей-Испании.webp',
                'img_title' => 'expos.brandwall.types.img.1',
                'alt' => 'expos.brandwall.types.img.alt_1',
                ],
                [
                'es' => 'img/expos/brandwall/es/types/Photocall-estands-para-eventos-comprar-en-Barcelona.webp',
                'ru' => 'img/expos/brandwall/ru/types/Брендводы-для-ивентов-и-ферии-Заказать-в-Барселоне.webp',
                'img_title' => 'expos.brandwall.types.img.2',
                'alt' => 'expos.brandwall.types.img.alt_2',
                ],
            ],
        ];
        $aluminumDirEs = 'img/expos/brandwall/es/aluminum/';
        $aluminumDirRu = 'img/expos/brandwall/ru/aluminum/';
        $aluminumImgTitleLangDir = 'expos.brandwall.aluminum.image_titles.';
        $aluminum = [
            'title' => 'expos.brandwall.aluminum.title',
            'text' => 'expos.brandwall.aluminum.text',
            'spaceBetween' => '20',
            'btn_prefix' => 'aluminum-',
            'slides' => [
                [
                    'es' => $aluminumDirEs .  '1.webp',
                    'ru' => $aluminumDirRu .  '1.webp',
                    'title' => $aluminumImgTitleLangDir . '1',
                    'alt' => $aluminumImgTitleLangDir . 'alt_1',
                    'height' => 'h-300',
                ],
                [
                    'es' => $aluminumDirEs .  '2.webp',
                    'ru' => $aluminumDirRu .  '2.webp',
                    'title' => $aluminumImgTitleLangDir . '2',
                    'alt' => $aluminumImgTitleLangDir . 'alt_2',
                    'height' => 'h-300',
                ],
                [
                    'es' => $aluminumDirEs .  '3.webp',
                    'ru' => $aluminumDirRu .  '3.webp',
                    'title' => $aluminumImgTitleLangDir . '3',
                    'alt' => $aluminumImgTitleLangDir . 'alt_3',
                    'height' => 'h-300',
                ],
            ],
        ];

        $chromeDirEs = 'img/expos/brandwall/es/chrome/';
        $chromeDirRu = 'img/expos/brandwall/ru/chrome/';
        $chromeImgTitleLangDir = 'expos.brandwall.chrome.image_titles.';
        $chrome = [
            'title' => 'expos.brandwall.chrome.title',
            'text' => 'expos.brandwall.chrome.text',
            'spaceBetween' => '20',
            'btn_prefix' => 'chrome-',
            'slides' => [
                [
                    'es' => $chromeDirEs .  '1.webp',
                    'ru' => $chromeDirRu .  '1.webp',
                    'title' => $chromeImgTitleLangDir . '1',
                    'alt' => $chromeImgTitleLangDir . 'alt_1',
                    'height' => 'h-300',
                ],
                [
                    'es' => $chromeDirEs .  '2.webp',
                    'ru' => $chromeDirRu .  '2.webp',
                    'title' => $chromeImgTitleLangDir . '2',
                    'alt' => $chromeImgTitleLangDir . 'alt_2',
                    'height' => 'h-300',
                ],
                [
                    'es' => $chromeDirEs .  '3.webp',
                    'ru' => $chromeDirRu .  '3.webp',
                    'title' => $chromeImgTitleLangDir . '3',
                    'alt' => $chromeImgTitleLangDir . 'alt_3',
                    'height' => 'h-300',
                ],
            ],
        ];

        $portfolioDirEs = 'img/expos/brandwall/es/portfolio/';
        $portfolioDirRu = 'img/expos/brandwall/ru/portfolio/';
        $portfolioLocaleAltPath = 'alt.expos.brandwall.portfolio.';
        //$portfolioLocaleTitlePath = 'expos.brandwall.portfolio.';
        $portfolioImages = [
            'gallery-image-path' => 'expos/brandwall/es/portfolio/gallery',
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Fabricacion-photocall-para-big-money-forum-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Изготовление-фотозоны-для-форума-big-money-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '1',
                'title' => $portfolioLocaleAltPath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Brandwall-con-estructura-de-aluminio-para-feria-en-españa.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Брендвол-под-заказ-для-it-мероприятия-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleAltPath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Photocall-textill-rapido-en-barcelona-para-eventos.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'печать-и-изготовление-брендвола-для-ивент-мероприятия-косметологии.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleAltPath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Fabricacion-brandwall-con-estructura-para-eventos-y-ferias.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Яркий-фотокол-со-структурой-для-украинской-школы-idol.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleAltPath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Photocalls-textill-brandwall-impresion-digital-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Брендвол-со-структурой-для-ивент-мероприятия-big-money-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleAltPath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Hacer-photocalls-y-brandwall-para-championato-de-gymnastica-rytmica.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'изготовление-фотозоны-для-чемпионата-по-спортивной-гимнастике.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleAltPath . '6',
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'expos.brandwall.questions.' . $i . '.question',
                'answer' => 'expos.brandwall.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'expos-wall-banner', compact('banner', 'breadCrumbs', 'types', 'aluminum', 'chrome', 'portfolioImages', 'questions'));
    }
}
