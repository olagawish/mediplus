<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;

//Route::get('ola', function () {
 //  return view('test');
  // });

Route::get('/', [Frontpages::class, 'home'])->name('home');
Route::get('contactUs', [FrontPages::class, 'contactUs'])->name('contactUs');