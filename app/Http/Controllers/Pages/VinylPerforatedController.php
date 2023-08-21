<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylPerforatedController extends SetLangAndViewController
{
    public function index($locale) {

            $banner = [
                'title' => 'vinyl.perforated.banner.title',
                'es' => [
                'imgBig' => 'img/vinyl/perforated/es/main.webp',
                'imgMin' => 'img/vinyl/perforated/es/main_.webp',
                ],
                'ru' => [
                'imgBig' => 'img/vinyl/perforated/ru/main.webp',
                'imgMin' => 'img/vinyl/perforated/ru/main_.webp',
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

        return $this->setLocaleAndView($locale, 'vinyl-perforated', compact('banner', 'breadCrumbs'));
    }
}
