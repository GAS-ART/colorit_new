<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsLightboxController extends SetLangAndViewController
{
    public function index($locale) {
        return $this->setLocaleAndView($locale, 'signboards-lightbox', []);
    }
}
