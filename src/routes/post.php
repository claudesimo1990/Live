<?php

use App\Http\Controllers\Booking\BookingController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::prefix('post')->group(function () {

    Route::get('/index', [PostsController::class, 'index'])->name('posts.index');
    Route::get('/travel/create', [PostsController::class, 'travel'])->name('travel.create');
    Route::get('/packet/create', [PostsController::class, 'packet'])->name('packet.create');
    Route::get('/booking/{post}/{user}', [BookingController::class, 'booking'])->name('post.booking');

});
