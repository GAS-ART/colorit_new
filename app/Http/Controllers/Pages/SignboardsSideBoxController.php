<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsSideBoxController extends SetLangAndViewController
{
    public function index($locale) {
        return $this->setLocaleAndView($locale, 'signboards-side-box', []);
    }
}
