<?php

use App\Http\Controllers\Admin\ImagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/galerie/store',[ImagesController::class, 'store'])->name('Images.store');

route::get('posts',[PostsController::class, 'posts'])->name('Posts.index');
route::get('posts/travels',[PostsController::class, 'travels'])->name('Posts.travels');
route::get('posts/packets',[PostsController::class, 'packets'])->name('Posts.packets');
route::get('/all-posts',[PostsController::class, 'all'])->name('Posts.all');
