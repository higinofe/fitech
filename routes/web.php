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
 
Route::get('/', [App\Http\Controllers\dash\Dashboard::class, 'index']);
Route::get('/lancamentos', [App\Http\Controllers\register\App::class, 'index']);

Route::get('lancamento/pagarereceber', [App\Http\Controllers\launch\PayRec::class, 'index']);
Route::get('lancamento/relatorio', [App\Http\Controllers\launch\Report::class, 'index']);

Route::get('cadastro/bancoecartoes', [App\Http\Controllers\register\BankCar::class, 'index']);
Route::get('cadastro/categorias', [App\Http\Controllers\register\Categories::class, 'index']);
Route::get('cadastro/entradas', [App\Http\Controllers\register\Prohibited::class, 'index']);

Route::get('configuracoes', [App\Http\Controllers\config\Con::class, 'index']);
Route::get('perfil', [App\Http\Controllers\profile\Pro::class, 'index']);
