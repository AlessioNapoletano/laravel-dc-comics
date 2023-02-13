<?php

use App\Http\Controllers\ComicsController as ComicsController;
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

// Route::get('/comics' , [ComicsController::class, 'index']);
// Route::get('/comics/{id}' , [ComicsController::class, 'show'])->name('show');

//Crea in automatico tutte le rotte, a partire dall'URI da noi specificato, in questo caso /comics
Route::resource('comics', ComicsController::class);