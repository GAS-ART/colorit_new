<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request, $locale = null)
    {
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
