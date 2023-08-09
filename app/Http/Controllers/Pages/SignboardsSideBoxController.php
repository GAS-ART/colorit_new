<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SignboardsSideBoxController extends SetLangAndViewController
{
    public function index($locale) {

        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'signboards.side_box.questions.' . $i . '.question',
                'answer' => 'signboards.side_box.questions.' . $i . '.answer',
            ];
        }

        return $this->setLocaleAndView($locale, 'signboards-side-box', compact('questions'));
    }
}
