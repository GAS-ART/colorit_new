<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Pages;

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

Route::get('/locale/{locale}', [Controllers\ChangeLanguagesController::class, 'changeLocale'])->name('locale');
Route::post('/send-main-form', [Controllers\sendController::class, 'submit'])->name('sendMainForm');
Route::get('/sitemap', [Controllers\SitemapController::class, 'generateSitemap']);



Route::get('/', [Pages\HomeController::class, 'index'])->name('index.lang');
Route::get('/{locale}', [Pages\HomeController::class, 'index'])->name('home');

Route::get('/{locale}/portfolio', [Pages\PortfolioController::class, 'index'])->name('portfolio');
Route::get('/{locale}/about-us', [Pages\AboutUsController::class, 'index'])->name('about_us');

Route::get('/{locale}/signboards-whithout-light', [Pages\SignboardsWithoutLightController::class, 'index'])->name('signboards_whithout_light');
Route::get('/{locale}/signboards-whith-light', [Pages\SignboardsWithLightController::class, 'index'])->name('signboards_whith_light');
Route::get('/{locale}/lightbox', [Pages\SignboardsLightboxController::class, 'index'])->name('lightbox');
Route::get('/{locale}/side-lightbox', [Pages\SignboardsSideBoxController::class, 'index'])->name('side_box');
Route::get('/{locale}/neon', [Pages\SignboardsNeonController::class, 'index'])->name('neon');

Route::get('/{locale}/letters-whithout-light', [Pages\LettersWhithoutLightController::class, 'index'])->name('letters_without_light');
Route::get('/{locale}/letters-whith-light', [Pages\LettersWhithLightController::class, 'index'])->name('letters_with_light');

Route::get('/{locale}/vinyl', [Pages\VinylRegularController::class, 'index'])->name('vinyl_regular');
Route::get('/{locale}/vinyl-perforated', [Pages\VinylPerforatedController::class, 'index'])->name('vinyl_perforated');
Route::get('/{locale}/sandblast_film', [Pages\VinylSandblastFilmController::class, 'index'])->name('sandblast_film');
Route::get('/{locale}/car-wrapping-with-vinyl', [Pages\VinylCarWrappingController::class, 'index'])->name('vinyl_car_wrapping');

Route::get('/{locale}/exhibition-stands', [Pages\ExposStandsController::class, 'index'])->name('expos_stands');
Route::get('/{locale}/brandwall', [Pages\ExposWallBannerController::class, 'index'])->name('expos_wall_banner');
Route::get('/{locale}/exhibition-banners', [Pages\ExposBannerController::class, 'index'])->name('expos_banner');
Route::get('/{locale}/roll-up', [Pages\ExposRollUpController::class, 'index'])->name('expos_roll_up');
Route::get('/{locale}/exhibition-figures', [Pages\ExposFiguresController::class, 'index'])->name('expos_figures');
Route::get('/{locale}/corporate-apparel', [Pages\ExposClothingController::class, 'index'])->name('expos_clothing');
Route::get('/{locale}/name-badges', [Pages\ExposBadgesController::class, 'index'])->name('expos_badges');