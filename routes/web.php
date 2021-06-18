<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BuyController;
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

Route::get('/', [IndexController::class , 'index'])->name('IndexPage');
Route::get('/item/{name}', [IndexController::class , 'ViewItem'])->name('ViewItem');
Route::post('/show/item', [IndexController::class , 'ShowItem'])->name('ShowItem');

Route::get('/buy/item/{type}/{id}', [BuyController::class , 'BuyItem'])->name('BuyItem')->middleware('auth');
Route::get('/verify/back/item/', [BuyController::class , 'VerifyItem'])->name('VerifyItem')->middleware('auth');

Route::get('/DL/File/{id}', [IndexController::class , 'DLFile'])->name('DLFile')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
