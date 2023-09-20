<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylRegularController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'vinyl.regular.banner.title',
            'es' => [
            'imgBig' => 'img/vinyl/regular/es/Vinilo-adhesivo-para-escaparates-y-locales-en-barcelona.webp',
            'imgMin' => 'img/vinyl/regular/es/Vinilo-adhesivo-para-escaparates-y-locales-en-barcelona_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/vinyl/regular/ru/Виниловая-пленка-изготовление-и-печать-в-барселоне.webp',
            'imgMin' => 'img/vinyl/regular/ru/Виниловая-пленка-изготовление-и-печать-в-барселоне_.webp',
            ],
            'alt' => 'alt.vinyl.regular.banner',
            'circle_text' => 'vinyl.regular.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.vinyl_regular')
        ];

        $types = [
            'title' => 'vinyl.regular.type.title',
            'text' => 'vinyl.regular.type.text',
            'img' => [
                [
                'es' => 'img/vinyl/regular/es/type/Colocacion-escaparates-y-oficinas-con-vinilo-impreso-en-Barcelona.webp',
                'ru' => 'img/vinyl/regular/ru/type/Поклейка-витрин-и-офисов-виниловой-пленкой-с-печатью-в-Барселоне.webp',
                'img_title' => 'vinyl.regular.type.img.1',
                'alt' => 'vinyl.regular.type.img.alt_1',
                ],
                [
                'es' => 'img/vinyl/regular/es/type/Vinilo-de-corte-fabricacion-y-montaje-en-barcelona.webp',
                'ru' => 'img/vinyl/regular/ru/type/Винил-с-порезкой-оформление-и-поклейка-в-барселоне.webp',
                'img_title' => 'vinyl.regular.type.img.2',
                'alt' => 'vinyl.regular.type.img.alt_2',
                ],
            ],
        ];


        $advantagesImgDir = 'img/vinyl/regular/icons/';
        $advantagesLangDir = 'vinyl.regular.advantages.';
        $advantages = [
            'background_img' => '/img/vinyl/regular/bg.webp',
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
        $portfolioLocaleTitlePath = 'vinyl.regular.portfolio.';
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
                'title' => $portfolioLocaleTitlePath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Decoración-de-ventanas-con-vinilo-adhesivo-impreso-con-circulos-dorados.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Оформление-витрины-виниловой-пленкой-с-золотыми-вставками.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleTitlePath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Hermosa-vitrina-de-vinilo-impreso-para-tienda-de-ropa.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Красивая-витрина-из-винила-с-печатью-и-порезкой-для-магазини-одежды.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleTitlePath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Impresión-de-imágenes-en-vinilo-laminado-para-oficinas-y-tiendas.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Печать-изображения-на-виниловой-пленке-в-офисы-и-магазины.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleTitlePath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'impresion-y-corte-de-pegatinas-de-vinilo-para-una-tienda-de-ropa-en-Barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'печать-и-порезка-виниловой-наклейки-для-магазина-одежды-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleTitlePath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Producción-de-diseño-y-vinilo-para-escaparate-de-salón-de-belleza-en-Barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Изготовление-дизайна-и-виниловой-пленки-для-витрины-салона-красоты-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleTitlePath . '6',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Decoración-del-centro-infantil-con-vinilo-laminado-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Оформление-детского-центра-виниловой-пленкой-с-ламинацией-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '7',
                'title' => $portfolioLocaleTitlePath . '7',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '8.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '8.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '8',
                'title' => $portfolioLocaleTitlePath . '8',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . '9.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . '9.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '9',
                'title' => $portfolioLocaleTitlePath . '9',
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'vinyl.regular.questions.' . $i . '.question',
                'answer' => 'vinyl.regular.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'vinyl-regular', compact('banner', 'breadCrumbs', 'types', 'advantages', 'questions', 'portfolioImages'));
    }
}
