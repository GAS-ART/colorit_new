<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExposFiguresController extends SetLangAndViewController
{
    public function index($locale) {
        return $this->setLocaleAndView($locale, 'expos-figures', []);
    }
}
