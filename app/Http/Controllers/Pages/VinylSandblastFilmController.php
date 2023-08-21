<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylSandblastFilmController extends SetLangAndViewController
{
    public function index($locale) {

        $banner = [
            'title' => 'vinyl.sandblast_film.banner.title',
            'es' => [
            'imgBig' => 'img/vinyl/sandblast_film/es/main.webp',
            'imgMin' => 'img/vinyl/sandblast_film/es/main_.webp',
            ],
            'ru' => [
            'imgBig' => 'img/vinyl/sandblast_film/ru/main.webp',
            'imgMin' => 'img/vinyl/sandblast_film/ru/main_.webp',
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

        return $this->setLocaleAndView($locale, 'vinyl-sandblast-film', compact('banner', 'breadCrumbs'));
    }
}
