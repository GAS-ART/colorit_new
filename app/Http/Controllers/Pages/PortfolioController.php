<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class PortfolioController extends Controller
{
    public function index($locale)
    {
        if (!in_array($locale, ['es', 'ru'])) {
            abort(404);
        }
        App::setLocale($locale);
        return view('portfolio');
    }
}
