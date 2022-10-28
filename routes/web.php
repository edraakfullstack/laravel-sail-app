<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mepage');
});

Route::get('/Stag', function () {
    echo  "Welcome! My name is: Ismail Adam. This is the Staging Environment";
});

Route::get('/Prod', function () {
   echo  "Welcome! My name is: Ismail Adam. This is the Production Environment";
});
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
