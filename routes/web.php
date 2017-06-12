<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//use Illuminate\Support\Facades\Auth;

Route::get('/', [
    'uses' =>'ProductController@getIndex', //вывод представления, используя ProductController
    'as' => 'product.index'
]);
Auth::routes();     // Маршруты аутентификации...


Route::get('/home', [
    'uses'=>'HomeController@index',          //переадресация обычного пользователя в профайл
    'as'=>'/home'
]);

Route::get('/admin', 'AdminController@index')->name('admin');   // route для админов

Route::get('/vender', 'VenderController@index')->name('vender');  // route для продавцов

// добавление в корзину
Route::get('add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

// переход в корзину
Route::get('shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

// переход на страницу оплаты
Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
   'uses' => 'ProductController@postCheckout',
   'as' => 'checkout',
    'middleware' => 'auth'
]);