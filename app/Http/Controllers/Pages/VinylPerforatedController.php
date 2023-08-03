<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylPerforatedController extends SetLangAndViewController
{
    public function index($locale) {
        return $this->setLocaleAndView($locale, 'vinyl-perforated', []);
    }
}
