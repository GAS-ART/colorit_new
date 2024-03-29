<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylSandblastFilmController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'vinyl.sandblast_film.banner.title',
            'es' => [
            'imgBig' => 'img/vinyl/sandblast_film/es/Pelicula-griz-mate-para-tiendas-y-oficinas-en-barcelona.webp',
            'imgMin' => 'img/vinyl/sandblast_film/es/Pelicula-griz-mate-para-tiendas-y-oficinas-en-barcelona_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/vinyl/sandblast_film/ru/Серая-матовая-пленка-для-офисов-и-витрин-магазинов.webp',
            'imgMin' => 'img/vinyl/sandblast_film/ru/Серая-матовая-пленка-для-офисов-и-витрин-магазинов_.webp',
            ],
            'alt' => 'alt.vinyl.sandblast_film.banner',
            'circle_text' => 'vinyl.sandblast_film.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.sandblast_film')
        ];

        $typesDirEs = 'img/vinyl/sandblast_film/es/type/';
        $typesDirRu = 'img/vinyl/sandblast_film/ru/type/';
        $typesImgTitleLangDir = 'vinyl.sandblast_film.types.image_titles.';
        $types = [
            'title' => 'vinyl.sandblast_film.types.title',
            'text' => 'vinyl.sandblast_film.types.text',
            'spaceBetween' => '20',
            'btn_prefix' => 'types-',
            'slides' => [
                [
                    'es' => $typesDirEs .  'Pegar-vinilo-gris-mate-en-un-salon-de-estetica-en-Barcelona.webp',
                    'ru' => $typesDirRu .  'Поклейка-серой-матовой-пленки-в-салон-эстетики-в-Барселоне.webp',
                    'title' => $typesImgTitleLangDir . '1',
                    'alt' => $typesImgTitleLangDir . 'alt_1',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  'Vinilo-gris-mate-con-corte-para-un-salón-de-belleza-en-Barcelona.webp',
                    'ru' => $typesDirRu .  'Серая-матовая-пленка-с-порезкой-для-салона-красоты-в-Барселоне.webp',
                    'title' => $typesImgTitleLangDir . '2',
                    'alt' => $typesImgTitleLangDir . 'alt_2',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  'Vinilo-acido-con-impresion-en-color-para-salon-de-belleza.webp',
                    'ru' => $typesDirRu .  'Пленка-серая-с-цветной-печатью-для-салона-красоты.webp',
                    'title' => $typesImgTitleLangDir . '3',
                    'alt' => $typesImgTitleLangDir . 'alt_3',
                    'height' => 'h-300',
                ],
            ],
        ];

        $advantagesImgDir = 'img/vinyl/sandblast_film/icons/';
        $advantagesLangDir = 'vinyl.sandblast_film.advantages.';
        $advantages = [
            'background_img' => '/img/vinyl/sandblast_film/bg.webp',
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

        $portfolioDirEs = 'img/vinyl/sandblast_film/es/portfolio/';
        $portfolioDirRu = 'img/vinyl/sandblast_film/ru/portfolio/';
        $portfolioLocaleAltPath = 'alt.vinyl.sandblast_film.portfolio.';
        $portfolioLocaleTitlePath = 'vinyl.regular.portfolio.';
        $portfolioImages = [
            'gallery-image-path' => 'vinyl/sandblast_film/es/portfolio/gallery',
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Vinilo-acido-mate-impreso-en-Barcelona-Pedir-cualquier-tipo-de-película-de-vinilo.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Серая-матовая-пленка-с-печатью-для-салона-красоты-в-кастельдельфельс.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '1',
                'title' => $portfolioLocaleTitlePath . '1',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Vinilo-de-corte-de-efecto-acido-glaseado-para-oficinas-Fabricacion-y-entrega-rapida.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Перезка-серой-пескоструйной-пленки-для-салона-красоты-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '2',
                'title' => $portfolioLocaleTitlePath . '2',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Vinilo-acido-translúcido-que-hace-intimidad-en-despachos.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Тонировка-офисов-и-магазинов-при-помощи-пленки-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '3',
                'title' => $portfolioLocaleTitlePath . '3',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Vinilo-acido-para-inmobiliarias-con-efecto-mate-glaseado-hacer-en-pedido.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Пленка-для-агентств-недвижимости-с-эффектом-матового-стекла-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '4',
                'title' => $portfolioLocaleTitlePath . '4',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Impresion-en-vinilo-glaseado-con-impresio-digital-en-todo-color.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Печать-на-пленке-с-эффектом-матового-стекла-в-испании.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '5',
                'title' => $portfolioLocaleTitlePath . '5',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulacion-cristales-oficinas-con-vinilo-adhesivo-translucido-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'тонировка-витрин-окон-матовой-пленкой-с-печатью-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '6',
                'title' => $portfolioLocaleTitlePath . '6',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'pelicula-gris-mate-arenado-para-oficinas-y-vitrinas.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'серая-пленка-с-эффектом-матового-стекла.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '7',
                'title' => $portfolioLocaleTitlePath . '7',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'Rotulacion-cristales-oficinas-con-vinilo-adhesivo-translucido.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'Тонировка-витрин-окон-матовой-пленкой-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '8',
                'title' => $portfolioLocaleTitlePath . '8',
            ],
            [
                'es' => [
                    'src' => $portfolioDirEs . 'pelicula-gris-mate-arenado-para-oficinas-y-vitrinas-en-barcelona.webp',
                ],
                'ru' => [
                    'src' => $portfolioDirRu . 'серая-пленка-с-эффектом-матового-стекла-купить-в-барселоне.webp',
                    
                ],
                'alt' => $portfolioLocaleAltPath . '9',
                'title' => $portfolioLocaleTitlePath . '9',
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'vinyl.sandblast_film.questions.' . $i . '.question',
                'answer' => 'vinyl.sandblast_film.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'vinyl-sandblast-film', compact('banner', 'breadCrumbs', 'types', 'advantages', 'questions', 'portfolioImages'));
    }
}
