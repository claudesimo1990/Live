<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DestinationsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ImagesController;
use App\Http\Controllers\Admin\StepController;

Route::prefix('admin')->group(function () {

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => 'auth:admin'], function () {

        Route::get('/', [AdminController::class, 'home'])->name('admin.home');
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

    });

});
