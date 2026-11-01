<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view("/home", 'homePage') ->name('homePage');
Route::view('/iss-tracking', 'iss')->name('issTracking'); //This would help with tracking the International Space Station and when to watch it
Route::view('/map', "satMap")->name('satelliteMap'); //This would hopefully have a general map of the satellites in the area or something of the sort
Route::view('/third-thing', 'third-thing')->name('third-thing');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
