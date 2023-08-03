<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsNeonController extends SetLangAndViewController
{
    public function index($locale) {
        return $this->setLocaleAndView($locale, 'signboards-neon', []);
    }
}
