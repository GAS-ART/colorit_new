

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
  })->name('letters'); */

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