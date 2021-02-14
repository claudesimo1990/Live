<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('Maintenance');
})->name('Maintenance');

Route::get('/howItWork','AppController@howItWork')->name('howItWork');
Route::view('/whoAreWe', '/pages/whoAreWe')->name('whoAreWe');
Route::view('/AGB', '/pages/agb')->name('AGB');
Route::view('/confidentialityCharter', '/pages/confidentialityCharter')->name('confidentialityCharter');
Route::view('/contactUs', '/pages/contactUs')->name('contactUs');
Route::view('/faq', '/pages/faq')->name('faq');
Route::view('/impressum', '/pages/impressum')->name('impressum');
Route::view('/principes', '/pages/principes')->name('principes');
Route::view('/termsOfservice', '/pages/termsOfservice')->name('termsOfservice');

Route::post('/getAllmessageWidth','messageController@show')->name('messages.show');
Route::post('/contact/user/{user}','ProfileController@contactUser')->name('Contact.user');

Route::post('message/{to}/{from}','ContactController@sendMessage')->name('message.send')->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
Route::get('/contact/{user}', 'ContactController@profile')->name('contact');
Route::get('coli-form','postController@coliForm')->name('packs.create');
Route::post('coli-form','postController@createColi')->name('post.colis.create');
//travel
Route::get('post/{post}/{user}','postController@bookingPost')->name('post.booking')->middleware('verified');
Route::post('booking/{post}/{user}','postController@booking');
Route::get('booking-confirmation/{user}/{post}/{reservation}','postController@bookingConfirm')->name('confirm');
//coli
Route::post('bookingPack/{post}/{user}','postController@bookingPack');
});

Route::get('travel-form','postController@travelForm')->name('travels.create')->middleware('auth');
Route::post('travel-form','postController@createTravel')->name('post.travels.create');

// api
route::get('/posts','postController@news');
route::get('/users','UsersController@users');
route::get('/contacts','ContactController@contacts');

//news page
Route::get('/news','postController@index')->name('news.index');
Route::get('/travels','postController@travels');
Route::get('/packs','postController@packs');

Auth::routes(['verify' => true]);

//notifications
Route::post('resetAllunreadNotifications', 'NotificationsController@update')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{user}', 'ProfileController@show')->name('profile.show');

//User Dashboard
Route::group(['middleware' => 'auth'], function(){
Route::get('/profile/{user}/chat', 'ContactController@getChat')->name('user.message')->middleware('auth');
Route::get('/profile/{user}/notifications', 'ContactController@notifications')->name('user.notifications')->middleware('auth');
Route::get('/profile/{user}/profile', 'ProfileController@create')->name('user.profile')->middleware('auth');
Route::post('/profile/{user}/profile', 'ProfileController@update');
Route::get('/profile/{user}/reservations', 'userActionController@reservations')->name('user.reservations')->middleware('auth');
Route::get('/profile/{user}/factures', 'userActionController@factures')->name('user.factures')->middleware('auth');
Route::get('/profile/{user}/demandes', 'userActionController@demandes')->name('user.demandes')->middleware('auth');
Route::get('/profile/{user}/travels', 'userActionController@travels')->name('user.travels')->middleware('auth');
Route::get('/profile/{user}/packs', 'userActionController@packs')->name('user.packs')->middleware('auth');
});

Route::get('/conversation/{id}', 'ContactController@getMessagesFor');
Route::post('/conversation/send', 'ContactController@send');

Route::get('/google', 'Auth\LoginController@redirectToProvider')->name('google');

Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/facebook/callback', 'facebookController@facebookCallback');

Route::get('/facebook', 'facebookController@redirect')->name('facebook');

 // admin
Route::get('/admin','Admin\HomeController@home')->name('admin.home')->middleware('is_admin');
Route::get('admin/login','Admin\AuthController@login')->name('admin.login');
Route::post('admin/login','Admin\AuthController@attemptAdmin');

// password
Route::get('/auth/showform', 'Auth\password\resetPasswordController@showform')->name('resetPassForm');

// images
Route::get('admin/images', 'Admin\ImagesController@index')->name('images.index');
Route::post('admin/images', 'Admin\ImagesController@store')->name('images.store');
Route::delete('admin/images/destroy/{id}', 'Admin\ImagesController@destroy')->name('images.destroy');

Route::group(['middleware' => ['is_admin']], function () {

Route::post('/admin/deconnect','Admin\AuthController@deconnect')->name('admin.deconnect')->middleware('is_admin');

Route::resource('/admin/users', 'Admin\UsersController')->middleware('is_admin');

// travels
Route::get('/admin/travels', 'Admin\TravelsController@index')->name('admin.travels.index')->middleware('is_admin');
Route::get('/admin/travels/accept/{travel}', 'Admin\TravelsController@acceptPost')->name('admin.travel.validate')->middleware('is_admin');
Route::get('/admin/travels/reject/{travel}', 'Admin\TravelsController@rejectPost')->name('admin.travel.reject')->middleware('is_admin');

// colis
Route::get('/admin/colis', 'Admin\ColisController@index')->name('admin.colis.index')->middleware('is_admin');
Route::get('/admin/colis/accept/{travel}', 'Admin\ColisController@acceptPost')->name('admin.coli.validate')->middleware('is_admin');
Route::get('/admin/colis/reject/{travel}', 'Admin\ColisController@rejectPost')->name('admin.coli.reject')->middleware('is_admin');

});
