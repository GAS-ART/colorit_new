<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylCarWrappingController extends SetLangAndViewController
{
    public function index($locale) {
        return $this->setLocaleAndView($locale, 'vinyl-car-wrapping', []);
    }
}
