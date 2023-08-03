<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class VinylSandblastFilmController extends SetLangAndViewController
{
    public function index($locale) {
        return $this->setLocaleAndView($locale, 'vinyl-sandblast-film', []);
    }
}
