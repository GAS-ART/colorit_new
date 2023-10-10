<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposClothingController extends SetLangAndViewController
{
    public function index($locale) {
        $banner = [
            'title' => 'expos.clothes.banner.title',
            'es' => [
            'imgBig' => 'img/expos/clothes/es/Impresion-en-ropa-transferencia-termica-en-ropa-alta-calidad-de-impresion-y-bordado.webp',
            'imgMin' => 'img/expos/clothes/es/Impresion-en-ropa-transferencia-termica-en-ropa-alta-calidad-de-impresion-y-bordado_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/expos/clothes/ru/Печать-трансферная-печать-на-футболках-и-кофтах-высокое-качество-и-быстрая-доставка-в-Испании.webp',
            'imgMin' => 'img/expos/clothes/ru/Печать-трансферная-печать-на-футболках-и-кофтах-высокое-качество-и-быстрая-доставка-в-Испании_.webp',
            ],
            'alt' => 'alt.expos.clothes.banner',
            'circle_text' => 'expos.clothes.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.expos_clothes')
        ];

        $typesDirEs = 'img/expos/clothes/es/types/';
        $typesDirRu = 'img/expos/clothes/ru/types/';
        $typesImgTitleLangDir = 'expos.clothes.types.image_titles.';
        $types = [
            'title' => 'expos.clothes.types.title',
            'text' => 'expos.clothes.types.text',
            'spaceBetween' => '20',
            'btn_prefix' => 'types-',
            'slides' => [
                [
                    'es' => $typesDirEs .  '1.webp',
                    'ru' => $typesDirRu .  '1.webp',
                    'title' => $typesImgTitleLangDir . '1',
                    'text' => $typesImgTitleLangDir . '1_text',
                    'alt' => $typesImgTitleLangDir . 'alt_1',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  '2.webp',
                    'ru' => $typesDirRu .  '2.webp',
                    'title' => $typesImgTitleLangDir . '2',
                    'text' => $typesImgTitleLangDir . '2_text',
                    'alt' => $typesImgTitleLangDir . 'alt_2',
                    'height' => 'h-300',
                ],
                [
                    'es' => $typesDirEs .  '3.webp',
                    'ru' => $typesDirRu .  '3.webp',
                    'title' => $typesImgTitleLangDir . '3',
                    'text' => $typesImgTitleLangDir . '3_text',
                    'alt' => $typesImgTitleLangDir . 'alt_3',
                    'height' => 'h-300',
                ],
            ],
        ];

        $servicesTitleLangDir = 'img/expos/clothes/es/services/';
        $servicesDirRu = 'img/expos/clothes/ru/services/';
        $servicesImgTitleLangDir = 'expos.clothes.services.image_titles';
        $services = [
            'title' => 'expos.clothes.services.title',
            'text' => 'expos.clothes.services.text',
            'spaceBetween' => '20',
            'btn_prefix' => 'services-',
            'slides' => [
                [
                    'es' => $servicesTitleLangDir .  'camisetas-perzonalizadas-con-impresion-o-bordado-en-barcelona.webp',
                    'ru' => $servicesDirRu .  'Футболки-с-дизайном-и-печатью-в-барселоне-под-заказ.webp',
                    'title' => $servicesImgTitleLangDir . '.1',
                    'alt' => '',
                    'height' => 'h-300',
                ],
                [
                    'es' => $servicesTitleLangDir .  'fabricacion-de-ropa-con-impresion-digital-en-españa-precios-bajos.webp',
                    'ru' => $servicesDirRu .  'Изготовление-кофт-с-уф-печатью-и-вышивкой-в-барселоне.webp',
                    'title' => $servicesImgTitleLangDir . '.2',
                    'alt' => '',
                    'height' => 'h-300',
                ],
                [
                    'es' => $servicesTitleLangDir .  'Bolsas-perzonalizadas-de-algodor-o-tela-para-negocios.webp',
                    'ru' => $servicesDirRu .  'Заказать-сумки-из-хлопка-с-цветной-печатью-в-испании.webp',
                    'title' => $servicesImgTitleLangDir . '.3',
                    'alt' => '',
                    'height' => 'h-300',
                ],
            ],
        ];

        $services2TitleLangDir = 'img/expos/clothes/es/services/';
        $services2DirRu = 'img/expos/clothes/ru/services/';
        $services2ImgTitleLangDir = 'expos.clothes.services2.image_titles';
        $services2 = [
            'title' => 'expos.clothes.services2.title',
            'text' => 'expos.clothes.services2.text',
            'spaceBetween' => '20',
            'btn_prefix' => 'services2-',
            'slides' => [
                [
                    'es' => $services2TitleLangDir .  'Sudaderas-largas-impresas-en-toda-color-en-barcelona.webp',
                    'ru' => $services2DirRu .  'Худи-под-заказ-с-личным-логотипом-быстро-и-с-доставкой.webp',
                    'title' => $services2ImgTitleLangDir . '.1',
                    'alt' => '',
                    'height' => 'h-300',
                ],
                [
                    'es' => $services2TitleLangDir .  'Hacer-impresion-en-ropa-para-deportes-y-eventos-en-barcelona.webp',
                    'ru' => $services2DirRu .  'Печать-на-спортивной-одежде-быстро-и-с-доставкой.webp',
                    'title' => $services2ImgTitleLangDir . '.2',
                    'alt' => '',
                    'height' => 'h-300',
                ],
                [
                    'es' => $services2TitleLangDir .  'Realizamos-impresion-en-ropa-para-adultos-y-bebe-en-alta-calidad.webp',
                    'ru' => $services2DirRu .  'Изготовление-детских-футболок-с-красивыми-рисунками-в-барселоне.webp',
                    'title' => $services2ImgTitleLangDir . '.3',
                    'alt' => '',
                    'height' => 'h-300',
                ],
            ],
        ];

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'expos.clothes.questions.' . $i . '.question',
                'answer' => 'expos.clothes.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'expos-clothing', compact('banner', 'breadCrumbs', 'types', 'services', 'services2', 'questions'));
    }
}
