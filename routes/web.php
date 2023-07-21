<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\LettersWhithoutLightController;
use App\Http\Controllers\Pages\LettersWhithLightController;
use App\Http\Controllers\Pages\PortfolioController;

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

Route::get('/{locale}/letters-whithout-light', [LettersWhithoutLightController::class, 'index'])->name('letters_without_light');
Route::get('/{locale}/letters-whith-light', [LettersWhithLightController::class, 'index'])->name('letters_with_light');
Route::get('/{locale}/portfolio', [PortfolioController::class, 'index'])->name('portfolio');