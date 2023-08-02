<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ExposClothingController extends Controller
{
    public function index($locale) {
        if (!in_array($locale, ['es', 'ru'])) {
            abort(404);
        }
        App::setLocale($locale);
        return view('expos-clothing');
    }
}
