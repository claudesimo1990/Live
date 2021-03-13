<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DestinationsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ImagesController;
use App\Http\Controllers\Admin\StepController;
use App\Http\Controllers\Admin\PagesController;

Route::prefix('admin')->group(function () {

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => 'auth:admin'], function () {

        Route::get('/home',[AdminController::class, 'home'])->name('admin.home');
        Route::get('/galerie/create',[ImagesController::class, 'create'])->name('images.create');
        Route::get('/galerie/index',[ImagesController::class, 'index'])->name('images.index');

        //users and Roles
        Route::get('/users/create',[AdminController::class, 'create'])->name('users.create');
        Route::post('/users/create',[AdminController::class, 'store'])->name('users.index');

        //frontend
        Route::get('/home/edit',[HomeController::class, 'create'])->name('home.edit');
        Route::post('/home/edit',[HomeController::class, 'store'])->name('frontend.header.store');

        //steps
        Route::post('/steps/create', [StepController::class, 'store'])->name('steps.store');

        //destinations
        Route::post('/destinations/create', [DestinationsController::class, 'store'])->name('destinations.store');
        Route::post('/destinations/destroy/{destination}', [DestinationsController::class, 'destroy'])->name('destinations.destroy');

        //pages
        Route::post('/frontend/page/create', [PagesController::class, 'store']);

        Route::get('/frontend/about/create', [PagesController::class, 'about'])->name('frontend.about.create');
        Route::get('/frontend/principes/create', [PagesController::class, 'principes'])->name('frontend.principes.create');
        Route::get('/frontend/privacy/create', [PagesController::class, 'privacy'])->name('frontend.privacy.create');
        Route::get('/frontend/termsOfservice/create', [PagesController::class, 'termsOfservice'])->name('frontend.termsOfservice.create');
        Route::get('/frontend/agb/create', [PagesController::class, 'agb'])->name('frontend.agb.create');
        Route::get('/frontend/impressum/create', [PagesController::class, 'impressum'])->name('frontend.impressum.create');

    });

});
