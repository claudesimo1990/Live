<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ProfilesController;


Route::prefix('dashboard')->group(function () {

    Route::get('/{user}/index', [ProfilesController::class, 'index'])->name('user.profile');
    Route::post('/{user}/update', [ProfilesController::class, 'update']);

    Route::get('/{user}/chat', [ProfilesController::class, 'messages'])->name('user.messages');
    Route::get('/{user}/notifications', [ProfilesController::class, 'notifications'])->name('user.notifications');

    Route::get('/{user}/reservations', [ProfilesController::class, 'reservations'])->name('user.reservations');
    Route::get('/{user}/factures', [ProfilesController::class, 'factures'])->name('user.factures');

    Route::get('/{user}/demandes', [ProfilesController::class, 'reservations'])->name('user.demandes');
    Route::get('/{user}/travels', [ProfilesController::class, 'travels'])->name('user.travels');
    Route::get('/{user}/packs', [ProfilesController::class, 'packets'])->name('user.packets');

});
