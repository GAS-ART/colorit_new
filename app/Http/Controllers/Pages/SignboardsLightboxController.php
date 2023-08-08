<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsLightboxController extends SetLangAndViewController
{
    public function index($locale) {

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'signboards.lightbox.questions.' . $i . '.question',
                'answer' => 'signboards.lightbox.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'signboards-lightbox', compact('questions'));
    }
}
