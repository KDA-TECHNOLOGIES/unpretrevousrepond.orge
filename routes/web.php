<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Front\FrontController;

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
Route::get('/',[FrontController::class,'index'])->name('front.index');
Route::get('qui-sommes-nous',[FrontController::class,'quisommesnous'])->name('front.quisommesnous');
Route::get('contactez-nous',[FrontController::class,'contact'])->name('front.contact');
Route::get('notre-blog',[FrontController::class,'actualites'])->name('front.actualites');
Route::get('foire-aux-questions',[FrontController::class,'faq'])->name('front.faq');
Route::get('connexion',[FrontController::class,'connexion'])->name('front.connexion');
Route::get('inscription',[FrontController::class,'inscription'])->name('front.inscription');
