<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/locale/{locale}',  'App\Http\Controllers\LanguagesController@changeLocale')->name('locale');
Route::post('/send-main-form', 'App\Http\Controllers\sendController@submit')->name('sendMainForm');

Route::get('/', function () {
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
  })->name('home');

  Route::get('/{locale}/letters', function ($locale) {
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


  Route::get('/{locale}/form', function ($locale) {
    if (!in_array($locale, ['es', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'es') {
  
      App::setLocale('es');
      return view('form');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('form');
    }
  })->name('form');