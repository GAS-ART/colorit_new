<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request, $locale = null)
    {   
        $quizAlt = 'alt.home.quiz.';
        $quizBaseDir = 'img/home/quiz/';
        $quizData = [
            [
                'es' => $quizBaseDir . 'es/Letras-corpóreas-30-mm-de-pvc-con-acabado-brillo.webp',
                'ru' => $quizBaseDir . 'ru/Буквы-обьемные-30-мм-из-пвх-с-фронтальными-накладками-из-глянцевого-акрила.webp',
                'alt' => $quizAlt . '1',
                'title' => 'home.quiz.body.signboards.title',
                'data' => ['data-quiz="signboards"',],
            ],
            [
                'es' => $quizBaseDir . 'es/Letras-de-pvc-con-frente-dorado-espejo.webp',
                'ru' => $quizBaseDir . 'ru/Обьемные-буквы-из-пвх-с-фронтальными-накладками-из-золотого-композита.webp',
                'alt' => $quizAlt . '2',
                'title' => 'home.quiz.body.letters.title',
                'data' => ['data-quiz="letters"',],
            ],
            [
                'es' => $quizBaseDir . 'es/Vinilo-adhesivo-impreso-para-una-tienda-de-ropa.webp',
                'ru' => $quizBaseDir . 'ru/Изготовление-виниловой-пленки-для-магазина-одежды.webp',
                'alt' => $quizAlt . '3',
                'title' => 'home.quiz.body.vinyl.title',
                'data' => ['data-quiz="vinyl"',],
            ],
            [
                'es' => $quizBaseDir . 'es/Estructura-para-feria-en-playa-de-aro.webp',
                'ru' => $quizBaseDir . 'ru/Выставочная-конструкция-арка-для-чемпионата-по-спортивной-гимнастике.webp',
                'alt' => $quizAlt . '4',
                'title' => 'home.quiz.body.event.title',
                'data' => ['data-popup-id="quiz" ', 'data-popup-payload="ОПРОСНИК: выставки"',],
                'class' => 'link-on-popup',
            ],
        ];
        $questions = [];
        for ($i = 1; $i <= 8; $i++) {
            $questions[] = [
                'question' => 'home.questions.' . $i . '.question',
                'answer' => 'home.questions.' . $i . '.answer',
            ];
        }
        $isHomePage = $request->path() === '/';
        if ($locale === 'ru') {
            App::setLocale('ru');
            return view('home', compact('questions', 'quizData'));
        } elseif ($locale === 'es') {
            App::setLocale('es');
            return redirect('/');
        } elseif ($isHomePage) {
            App::setLocale('es');
            return view('home', compact('questions', 'quizData'));
        }
        else {
            abort(404);
        }
    }
}
