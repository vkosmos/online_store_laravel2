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

Route::get('/', 'Home')->name('home');
Route::get('/actions', 'Actions')->name('actions');
Route::get('/contacts', 'Contacts')->name('contacts');

Route::get('/catalog', 'Catalog@index')->name('catalog.index');
Route::get('/catalog/{link}', 'Catalog@childs')->name('catalog.childs');
Route::get('/goods/{id}', 'Goods')->name('goods');

Route::get('/basket', 'shoppingBasket@index')->name('basket.index');
Route::post('/basket', 'shoppingBasket@store')->name('basket.store');
Route::get('/basket/{id}', 'shoppingBasket@delete')->name('basket.delete');



Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function(){
    Route::get('/', 'DashboardController@index')->name('admin.index');
    Route::resource('/users', 'UsersController');
    Route::get('/orders', 'OrdersController@index')->name('admin.orders.index');
    Route::get('/orders/delete', 'OrdersController@delete')->name('admin.orders.delete');
});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', 'AuthController@registerForm');
    Route::post('/register', 'AuthController@register');
    Route::get('/login', 'AuthController@loginForm');
    Route::post('/login', 'AuthController@login');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/logout', 'AuthController@logout');
    Route::post('/order', 'Order@store')->name('order.create');
});

Route::get('test', 'testController@test');
