<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\AttributionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/bonjour/{nom}', function () {
//     return view('bonjour');
// });

/**
 * Routes des attributions
 */
Route::get('/attributions', [AttributionController::class, 'index'])->name('attributions.index');

Route::get('/attributions/create', [AttributionController::class, 'create'])->name('attributions.create');

Route::post('/attributions', [AttributionController::class, 'store'])->name('attributions.store');
Route::get(
    '/attributions/edit/{id}',
    [AttributionController::class, 'edit']
)->name('attributions.edit');
Route::PATCH('/attributions/{id}', [AttributionController::class, 'update'])->name('attributions.update');
Route::delete(
    '/attributions/delete/{id}',
    [AttributionController::class, 'destroy']
)->name('attributions.destroy');


/**
 * Routes des Ordinateurs
 */
Route::get('/postes', [ComputerController::class, 'index'])->name('postes.index');
Route::get('/postes/create', [ComputerController::class, 'create'])->name('postes.create');
Route::post('/postes', [ComputerController::class, 'store']);
Route::get(
    '/postes/edit/{id}',
    [ComputerController::class, 'edit']
)->name('postes.edit');
Route::PATCH('/postes/{id}', [ComputerController::class, 'update'])->name('postes.update');
Route::delete(
    '/postes/delete/{id}',
    [ComputerController::class, 'destroy']
)->name('postes.destroy');

/**
 * Routes des utilisateurs
 */
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get(
    '/users/edit/{id}',
    [UserController::class, 'edit']
)->name('users.edit');

Route::PATCH('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::delete(
    '/users/delete/{id}',
    [UserController::class, 'destroy']
)->name('users.destroy');



// Route::post('/users', 'App\Http\Controllers\UserController@store')->name('users.store');

//Route::get('/users/update', [UserController::class, 'update'])->name('users.update');

// Route::get('/dashboard', function () {
//     $attribution = \App\Models\Attribution::all();
//     return view('dashboard', [
//         'dashboard' => $attribution,
//     ]);
// });

// Route::get('/bonjour/{nom}', function () {
//     $nom = request('nom');

//     return view('bonjour', [
//         'nom' => $nom,
//     ]);
// });

// Route::post('/addComputer', function () {
//     $computer = new \App\Models\Computer;
//     $computer->nom_pc = request('nom_pc');
//     $computer->nom_pc = request('Adresse_ip');

//     $computer->save();
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
