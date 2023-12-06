<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class PortfolioController extends SetLangAndViewController
{
    public function index($locale)
    {

        $breadCrumbs = [
            'links' => [
            [
            'route' => route('home', ['locale' => $locale]),
            'label' => __('crumbs.home')
            ],
            // Add other breadcrumb elements as needed
            ],
            'currentPage' => __('portfolio.title')
        ];

        $images = [
            'signboards' => [
                'name' => 'signboards',
                'quantity' => 33,
            ],
            'letters' => [
                'name' => 'letters',
                'quantity' => 32,
            ],
            'vinyl' => [
                'name' => 'vinyl',
                'quantity' => 30,
            ],
            'expos' => [
                'name' => 'expos',
                'quantity' => 21,
            ],
        ];

        return $this->setLocaleAndView($locale, 'portfolio', compact('breadCrumbs', 'images'));
    }
}
