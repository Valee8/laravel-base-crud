<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;


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

// Route per la home
Route::get('/', [MainController::class, 'home']) -> name('home');

// Route per info singolo santo
Route::get('/saint/show/{id}', [MainController::class, 'saintShow']) -> name('saint.show');

// Route per eliminare un santo
Route::get('/saint/destroy/{id}', [MainController::class, 'saintDestroy']) -> name('saint.destroy');

// Route per creare un santo
Route::get('/saint/create', [MainController::class, 'saintCreate']) -> name('saint.create');

// Route per i dati del form
Route::post('/saint/store', [MainController::class, 'saintStore']) -> name('saint.store');

