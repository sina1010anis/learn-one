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
Route::prefix('')->middleware('auth')->group(function (){
    Route::get('/buy/item/{type}/{id}', [BuyController::class , 'BuyItem'])->name('BuyItem');
    Route::get('/verify/back/item/', [BuyController::class , 'VerifyItem'])->name('VerifyItem');
    Route::get('/verify/back/item/video', [BuyController::class , 'VerifyItemVideo'])->name('VerifyItemVideo');
    Route::get('/DL/File/{id}', [IndexController::class , 'DLFileVideo'])->name('DLFile');
    Route::get('/user/article', [IndexController::class , 'articleView'])->name('articleView');
    Route::get('/Dl/File/article/{id}', [IndexController::class , 'DLFileArticle'])->name('DLFileArticle');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
