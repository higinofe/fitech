<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
 
Route::get('/', [App\Http\Controllers\Dashboard\Dashapp::class, 'index']);
Route::get('/lancamentos', [App\Http\Controllers\register\App::class, 'index']);
