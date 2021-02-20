<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SocialMediaAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//pages
Route::get('/', [AppController::class,'home'])->name('accueil');

Route::get('/whoAreWe', [PagesController::class, 'whoAreWe'])->name('whoAreWe');
Route::get('/agb', [PagesController::class, 'agb'])->name('agb');
Route::get('/confidentialityCharter', [PagesController::class, 'confidentialityCharter'])->name('confidentialityCharter');
Route::get('/contactUs', [PagesController::class, 'contactUs'])->name('contactUs');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/impressum', [PagesController::class, 'impressum'])->name('impressum');
Route::get('/principes', [PagesController::class, 'principes'])->name('principes');
Route::get('/termsOfservice', [PagesController::class, 'termsOfservice'])->name('termsOfservice');

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
