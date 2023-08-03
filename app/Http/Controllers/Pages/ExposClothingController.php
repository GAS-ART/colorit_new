<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposClothingController extends SetLangAndViewController
{
    public function index($locale) {
        return $this->setLocaleAndView($locale, 'expos-clothing', []);
    }
}
