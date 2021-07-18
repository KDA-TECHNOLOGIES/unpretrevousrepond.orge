<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Front\FrontController;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\comptes\CompteController;
use \App\Http\Controllers\Auth\VerificationController;
use \App\Http\Controllers\Auth\ForgotPasswordController;
use \App\Http\Controllers\Auth\ResetPasswordController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[FrontController::class,'index'])->name('front.index');
Route::get('qui-sommes-nous',[FrontController::class,'quisommesnous'])->name('front.quisommesnous');
Route::get('contactez-nous',[FrontController::class,'contact'])->name('front.contact');
Route::get('notre-blog',[FrontController::class,'actualites'])->name('front.actualites');
Route::get('foire-aux-questions',[FrontController::class,'faq'])->name('front.faq');
Route::get('conditions-et-termes-utilisations',[FrontController::class,'conditionsEtTermes'])->name('front.condition');

Route::get('connexion',[LoginController::class,'showLoginForm'])->name('front.connexion');
Route::post('connexion',[LoginController::class,'login'])->name('front.post.connexion');
Route::post('deconnexion',[LoginController::class,'logout'])->name('front.post.deconnexion');

Route::get('inscription',[FrontController::class,'inscription'])->name('front.inscription');
Route::post('inscription',[RegisterController::class,'register'])->name('front.post.inscription');

Route::get('email/verify', [VerificationController::class,'show'])->name('verification.notice');
Route::get('email/verify/{id}', [VerificationController::class,'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class,'resend'])->name('verification.resend');
Route::post('email/resend', [VerificationController::class,'resend'])->name('verification.resend');

// Password Reset Routes...
Route::get('password/reset', [ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');


Route::prefix('compte')->group(function(){
    Route::get('',[CompteController::class,'index'])->name('compte.index');
    Route::get('mon-reseau-catho',[CompteController::class,'freresEnchrist'])->name('compte.freresenchrist');
    Route::get('mes-groupes-de-prieres',[CompteController::class,'groupesDePriere'])->name('compte.groupesdepriere');
    Route::get('mon-profil',[CompteController::class,'profilMembre'])->name('compte.profilmembre');
    Route::get('mon-agenda',[CompteController::class,'monAgenda'])->name('compte.monagenda');
    Route::get('prieres-divers',[CompteController::class,'prieres'])->name('compte.prieres');
    Route::get('vie-des-saints',[CompteController::class,'vieDesSaints'])->name('compte.viedessaints');
    Route::get('mon-agenda-spirituel',[CompteController::class,'agendaSpirituel'])->name('compte.agendaspirituel');
});
Route::get('/test', function () {
    return view('emails.auth.addressVerify');
});
