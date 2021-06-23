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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/bonjour/{nom}', function () {
//     return view('bonjour');
// });

Route::get('/bonjour/{nom}', function () {
    $nom = request('nom');

    return view('bonjour',[
        'nom' => $nom,
    ]);
});