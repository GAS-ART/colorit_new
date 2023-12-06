<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class PortfolioController extends SetLangAndViewController
{
    public function index($locale)
    {

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

        return $this->setLocaleAndView($locale, 'portfolio', compact('images'));
    }
}
