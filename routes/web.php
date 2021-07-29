<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RacesController;
use App\Http\Controllers\CartController;



Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('buy', [CartController::class, 'buy'])->name('cart.buy');
Route::get('/order_history', 'App\Http\Controllers\ReservationsController@index2')->name('pages.order_history');


Route::get('login',['middleware' => ['web'],'as'=>'auth.getLogin','uses'=> 'Auth\AuthController@getLogin']);
Route::post('login',['middleware' => ['web'],'as'=>'auth.postLogin','uses'=> 'Auth\AuthController@postLogin']);

Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['web','auth'],'prefix'=>'admin','namespace'=>'Admin'], function () {
});


Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');



Route::get('/', 'App\Http\Controllers\RacesController@index')->name('pages.index');


Route::get('/about', function () 
{
    return view('pages.about');
});

Route::get('/order_history', 'App\Http\Controllers\ReservationsController@index2')->name('pages.order_history');

Route::get('/contact-form', function () 
{
    return view('pages.contact');
});

Route::get('/calendar', function () 
{
    return view('pages.calendar');
});

Route::get('/hungary', function () 
{
    return view('pages.hungary');
});

Route::get('/belgium', function () 
{
    return view('pages.belgium');
});

Route::get('/netherlands', function () 
{
    return view('pages.netherlands');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
