<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class SetLangAndViewController extends Controller
{
    protected function setLocaleAndView($locale, $view, $data = [])
    {
        if ($view === 'home') {
            switch ($locale) {
                case 'ru':
                    App::setLocale('ru');
                    return view('home', $data);
                case 'es':
                    App::setLocale('es');
                    return redirect('/');
                case null:
                    App::setLocale('es');
                    return view('home', $data);
            }
        }
        if (!in_array($locale, ['es', 'ru'])) {
            abort(404);
        }
        App::setLocale($locale);
        return empty($data) ? view($view) : view($view, $data);
    }
}
