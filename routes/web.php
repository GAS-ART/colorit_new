<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\LettersWhithoutLightController;
use App\Http\Controllers\Pages\LettersWhithLightController;
use App\Http\Controllers\Pages\PortfolioController;
use App\Http\Controllers\Pages\SignboardsWithoutLightController;
use App\Http\Controllers\Pages\SignboardsWithLightController;
use App\Http\Controllers\Pages\SignboardsLightboxController;
use App\Http\Controllers\Pages\SignboardsSideBoxController;
use App\Http\Controllers\Pages\SignboardsNeonController;
use App\Http\Controllers\Pages\VinylRegularController;
use App\Http\Controllers\Pages\VinylPerforatedController;
use App\Http\Controllers\Pages\VinylSandblastFilmController;
use App\Http\Controllers\Pages\VinylCarWrappingController;
use App\Http\Controllers\Pages\ExposStandsController;
use App\Http\Controllers\Pages\ExposWallBannerController;
use App\Http\Controllers\Pages\ExposBannerController;
use App\Http\Controllers\Pages\ExposRollUpController;
use App\Http\Controllers\Pages\ExposFiguresController;
use App\Http\Controllers\Pages\ExposClothingController;
use App\Http\Controllers\Pages\ExposBadgesController;

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
Route::get('/{locale}/signboards-whithout-light', [SignboardsWithoutLightController::class, 'index'])->name('signboards_whithout_light');
Route::get('/{locale}/signboards-whith-light', [SignboardsWithLightController::class, 'index'])->name('signboards_whith_light');
Route::get('/{locale}/lightbox', [SignboardsLightboxController::class, 'index'])->name('lightbox');
Route::get('/{locale}/side-lightbox', [SignboardsSideBoxController::class, 'index'])->name('side_box');
Route::get('/{locale}/neon', [SignboardsNeonController::class, 'index'])->name('neon');
Route::get('/{locale}/vinyl', [VinylRegularController::class, 'index'])->name('vinyl_regular');
Route::get('/{locale}/vinyl-perforated', [VinylPerforatedController::class, 'index'])->name('vinyl_perforated');
Route::get('/{locale}/sandblast_film', [VinylSandblastFilmController::class, 'index'])->name('sandblast_film');
Route::get('/{locale}/car-wrapping-with-vinyl', [VinylCarWrappingController::class, 'index'])->name('vinyl_car_wrapping');
Route::get('/{locale}/exhibition-stands', [ExposStandsController::class, 'index'])->name('expos_stands');
Route::get('/{locale}/brandwall', [ExposWallBannerController::class, 'index'])->name('expos_wall_banner');
Route::get('/{locale}/exhibition-banners', [ExposBannerController::class, 'index'])->name('expos_banner');
Route::get('/{locale}/roll-up', [ExposRollUpController::class, 'index'])->name('expos_roll_up');
Route::get('/{locale}/exhibition-figures', [ExposFiguresController::class, 'index'])->name('expos_figures');
Route::get('/{locale}/corporate-apparel', [ExposClothingController::class, 'index'])->name('expos_clothing');
Route::get('/{locale}/name-badges', [ExposBadgesController::class, 'index'])->name('expos_badges');