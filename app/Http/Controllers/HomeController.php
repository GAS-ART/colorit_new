<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request, $locale = null)
    {
        $questions = [
            [
            'question' => __('home.questions.1.question'),
            'answer' => __('home.questions.1.answer'),
            ],
            [
            'question' => __('home.questions.2.question'),
            'answer' => __('home.questions.2.answer'),
            ],
            [
            'question' => __('home.questions.3.question'),
            'answer' => __('home.questions.3.answer'),
            ],
            [
            'question' => __('home.questions.4.question'),
            'answer' => __('home.questions.4.answer'),
            ],
            [
            'question' => __('home.questions.5.question'),
            'answer' => __('home.questions.5.answer'),
            ],
            [
            'question' => __('home.questions.6.question'),
            'answer' => __('home.questions.6.answer'),
            ],
            [
            'question' => __('home.questions.7.question'),
            'answer' => __('home.questions.7.answer'),
            ],
            [
            'question' => __('home.questions.8.question'),
            'answer' => __('home.questions.8.answer'),
            ],
        ];
        $isHomePage = $request->path() === '/';
        if ($locale === 'ru') {
            App::setLocale('ru');
            return view('home', compact('questions'));
        } elseif ($locale === 'es') {
            App::setLocale('es');
            return redirect('/');
        } elseif ($isHomePage) {
            App::setLocale('es');
            return view('home', compact('questions'));
        }
        else {
            abort(404);
        }
    }
}
