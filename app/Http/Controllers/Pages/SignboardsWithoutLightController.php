<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SignboardsWithoutLightController extends Controller
{
    public function index($locale) 
    {
        $banner = [
            'title' => 'signboards.whithout_light.banner.title',
            'es' => [
            'imgBig' => 'img/signboards/whithout_light/es/main.webp',
            'imgMin' => 'img/signboards/whithout_light/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/signboards/whithout_light/ru/main.webp',
            'imgMin' => 'img/signboards/whithout_light/ru/main_.webp',
            ],
            'alt' => 'alt.signboards.whithout_light.banner',
            'circle_text' => 'signboards.whithout_light.banner.circle_text',
        ];

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('signboards_whithout_light', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('crumbs.signboards_whithout_light')
        ];

        $material = [
            'title' => 'signboards.whithout_light.material.title',
            'text' => 'signboards.whithout_light.material.text',
            'img' => [
                [
                'es' => 'img/signboards/whithout_light/es/material/1.webp',
                'ru' => 'img/signboards/whithout_light/ru/material/1.webp',
                'img_title' => __('signboards.whithout_light.material.img_1_title'),
                'alt' => '',
                ],
                [
                'es' => 'img/signboards/whithout_light/es/material/2.webp',
                'ru' => 'img/signboards/whithout_light/ru/material/2.webp',
                'img_title' => 'signboards.whithout_light.material.img_2_title',
                'alt' => '',
                ],
            ],
        ];

        $mounts = [
            'title' => 'signboards.whithout_light.mounts.title',
            'text' => 'signboards.whithout_light.mounts.text',
            'img' => [
                [
                'es' => 'img/signboards/whithout_light/es/mounts/1.webp',
                'ru' => 'img/signboards/whithout_light/ru/mounts/1.webp',
                'img_title' => __('signboards.whithout_light.mounts.img_1_title'),
                'alt' => '',
                ],
                [
                'es' => 'img/signboards/whithout_light/es/mounts/2.webp',
                'ru' => 'img/signboards/whithout_light/ru/mounts/2.webp',
                'img_title' => 'signboards.whithout_light.mounts.img_2_title',
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

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'signboards.whithout_light.questions.' . $i . '.question',
                'answer' => 'signboards.whithout_light.questions.' . $i . '.answer',
            ];
        }

        if (!in_array($locale, ['es', 'ru'])) {
            abort(404);
        }
        App::setLocale($locale);
        return view('signboards-whithout-light', compact('banner', 'breadCrumbs', 'material', 'mounts', 'portfolioImages', 'questions'));
    }
}
