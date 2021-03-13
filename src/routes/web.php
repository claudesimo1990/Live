<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SocialMediaAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//pages
Route::get('/', [AppController::class,'home'])->name('accueil');

Route::get('/about-us', [AppController::class, 'about'])->name('whoAreWe');
Route::get('/principes', [AppController::class, 'principes'])->name('principes');
Route::get('/privacy', [AppController::class, 'privacy'])->name('privacy'); //conditions generales d'utilisation
Route::get('/termsOfservice', [AppController::class, 'termsOfservice'])->name('termsOfservice');
Route::get('/impressum', [AppController::class, 'impressum'])->name('impressum');
Route::get('/agb', [AppController::class, 'agb'])->name('agb');


Route::get('/faq', [AppController::class, 'faq'])->name('faq');

Route::get('/contact-us', [AppController::class, 'contactUs'])->name('contactUs');


Route::get('/howItWork', [AppController::class, 'howItWork'])->name('howItWork');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// api
Auth::routes(['verify' => true]);
Auth::routes();

//social
Route::get('/google', [SocialMediaAuthController::class, 'redirectToProvider'])->name('google');
Route::get('/callback', [SocialMediaAuthController::class, 'handleProviderCallback']);

Route::get('/facebook', [SocialMediaAuthController::class, 'redirect'])->name('facebook');
Route::get('/facebook/callback', [SocialMediaAuthController::class, 'facebookCallback']);
