<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class AboutUsController extends SetLangAndViewController
{
    public function index($locale) {
        return $this->setLocaleAndView($locale, 'about-us', []);
    }
}
