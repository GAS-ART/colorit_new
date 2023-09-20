<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylPerforatedController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'vinyl.perforated.banner.title',
            'es' => [
            'imgBig' => 'img/vinyl/perforated/es/Vinilo-microperforado-impresion-y-montaje-en-barcelona.webp',
            'imgMin' => 'img/vinyl/perforated/es/Vinilo-microperforado-impresion-y-montaje-en-barcelona_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/vinyl/perforated/ru/Изготовление-перфопленки-с-печатью-для-магазинов-и-офисов-в-барселоне.webp',
            'imgMin' => 'img/vinyl/perforated/ru/Изготовление-перфопленки-с-печатью-для-магазинов-и-офисов-в-барселоне_.webp',
            ],
            'alt' => 'alt.vinyl.perforated.banner',
            'circle_text' => 'vinyl.perforated.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.vinyl_perforated')
        ];

        $typesDirEs = 'img/vinyl/perforated/es/type/';
        $typesDirRu = 'img/vinyl/perforated/ru/type/';
        $typesImgTitleLangDir = 'vinyl.perforated.types.image_titles.';
        $types = [
            'title' => 'vinyl.perforated.types.title',
            'text' => null,
            'spaceBetween' => '20',
            'btn_prefix' => 'types-',
            'slides' => [
                [
                    'es' => $typesDirEs .  '1.webp',
                    'ru' => $typesDirRu .  '1.webp',
                    'title' => $typesImgTitleLangDir . '1',
                    'alt' => $typesImgTitleLangDir . 'alt_1',
                    'text' => $typesImgTitleLangDir . 'text_1',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  '2.webp',
                    'ru' => $typesDirRu .  '2.webp',
                    'title' => $typesImgTitleLangDir . '2',
                    'alt' => $typesImgTitleLangDir . 'alt_2',
                    'text' => $typesImgTitleLangDir . 'text_2',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  '3.webp',
                    'ru' => $typesDirRu .  '3.webp',
                    'title' => $typesImgTitleLangDir . '3',
                    'alt' => $typesImgTitleLangDir . 'alt_3',
                    'text' => $typesImgTitleLangDir . 'text_3',
                    'height' => 'h-300',
                ],
            ],
        ];

        $advantagesImgDir = 'img/vinyl/perforated/icons/';
        $advantagesLangDir = 'vinyl.perforated.advantages.';
        $advantages = [
            'background_img' => '/img/vinyl/perforated/bg.webp',
            'title' => $advantagesLangDir . 'title',
            'cards' => [
                [
                    'img' => $advantagesImgDir . '1.svg',
                    'title' => $advantagesLangDir . '1.title',
                    'text' => $advantagesLangDir . '1.text',
                ],
                [
                    'img' => $advantagesImgDir . '2.svg',
                    'title' => $advantagesLangDir . '2.title',
                    'text' => $advantagesLangDir . '2.text',
                ],
                [
                    'img' => $advantagesImgDir . '3.svg',
                    'title' => $advantagesLangDir . '3.title',
                    'text' => $advantagesLangDir . '3.text',
                ],
                [
                    'img' => $advantagesImgDir . '4.svg',
                    'title' => $advantagesLangDir . '4.title',
                    'text' => $advantagesLangDir . '4.text',
                ],
            ],
        ];

        $portfolioDirEs = 'img/vinyl/regular/es/portfolio/';
        $portfolioDirRu = 'img/vinyl/regular/ru/portfolio/';
        $portfolioLocaleAltPath = 'alt.vinyl.regular.portfolio.';
        //$portfolioLocaleTitlePath = 'portfolio.letters.';
        $portfolioImages = [
            'gallery-image-path' => 'vinyl/regular/es/portfolio/gallery',
            [
                'es' => [
                    'src' => $portfolioDirEs . 'vinílo-adhesivo-con-impresión-y-laminación-para-Mercedes.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'виниловая-пленка-с-печатью-и-ламинацией-для-мерседес.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '1',
                'title' => $portfolioLocaleAltPath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Decoración-de-ventanas-con-vinilo-adhesivo-impreso-con-circulos-dorados.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Оформление-витрины-виниловой-пленкой-с-золотыми-вставками.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleAltPath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Hermosa-vitrina-de-vinilo-impreso-para-tienda-de-ropa.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Красивая-витрина-из-винила-с-печатью-и-порезкой-для-магазини-одежды.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleAltPath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Impresión-de-imágenes-en-vinilo-laminado-para-oficinas-y-tiendas.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Печать-изображения-на-виниловой-пленке-в-офисы-и-магазины.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleAltPath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'impresion-y-corte-de-pegatinas-de-vinilo-para-una-tienda-de-ropa-en-Barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'печать-и-порезка-виниловой-наклейки-для-магазина-одежды-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleAltPath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Producción-de-diseño-y-vinilo-para-escaparate-de-salón-de-belleza-en-Barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Изготовление-дизайна-и-виниловой-пленки-для-витрины-салона-красоты-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleAltPath . '6',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Decoración-del-centro-infantil-con-vinilo-laminado-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Оформление-детского-центра-виниловой-пленкой-с-ламинацией-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '7',
                'title' => $portfolioLocaleAltPath . '7',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '8.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '8.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '8',
                'title' => $portfolioLocaleAltPath . '8',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '9.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '9.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '9',
                'title' => $portfolioLocaleAltPath . '9',
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'vinyl.perforated.questions.' . $i . '.question',
                'answer' => 'vinyl.perforated.questions.' . $i . '.answer',
            ];
        }
        return $this->setLocaleAndView($locale, 'vinyl-perforated', compact('banner', 'breadCrumbs', 'types', 'advantages', 'questions', 'portfolioImages'));
    }
}
