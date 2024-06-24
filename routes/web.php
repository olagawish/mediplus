<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;

//Route::get('ola', function () {
 //  return view('test');
  // });

Route::get('/', [Frontpages::class, 'home'])->name('home');
Route::get('contactUs', [FrontPages::class, 'contactUs'])->name('contactUs');

Route::group(
  [
  'prefix' => LaravelLocalization::setLocale(),
  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
  ], function(){
});
