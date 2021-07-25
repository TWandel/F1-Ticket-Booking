<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RacesController;
use App\Http\Controllers\CartController;

Route::get('cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');

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

Route::get('/status', function () 
{
    return view('pages.status');
});

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

Route::get('/cart', function () 
{
    return view('pages.cart');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
