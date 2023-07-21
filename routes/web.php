<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/locale/{locale}',  'App\Http\Controllers\LanguagesController@changeLocale')->name('locale');
Route::post('/send-main-form', 'App\Http\Controllers\sendController@submit')->name('sendMainForm');

Route::get('/', [HomeController::class, 'index'])->name('index.lang');
Route::get('/{locale}', [HomeController::class, 'index'])->name('home');


/* Route::get('/', function () {
    App::setLocale('es');
    return view('home');
  })->name('index.lang');
  Route::get('/es', function () {
    App::setLocale('es');
    return  redirect('/');
  });
  
  Route::get('/{locale}', function ($locale) {
    if (!in_array($locale, ['es', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'es') {
  
      App::setLocale('es');
      return view('home');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('home');
    }
  })->name('home'); */

  Route::get('/{locale}/letters-whithout-light', function ($locale) {
    if (!in_array($locale, ['es', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'es') {
  
      App::setLocale('es');
      return view('letters');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('letters');
    }
  })->name('letters');

  Route::get('/{locale}/letters-whith-light', function ($locale) {
    if (!in_array($locale, ['es', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'es') {
  
      App::setLocale('es');
      return view('letters-whith-light');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('letters-whith-light');
    }
  })->name('letters_with_light');

  Route::get('/{locale}/portfolio', function ($locale) {
    if (!in_array($locale, ['es', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'es') {
  
      App::setLocale('es');
      return view('portfolio');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('portfolio');
    }
  })->name('portfolio');