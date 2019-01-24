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

Route::get('/', 'Home');

Route::get('/catalog', 'Catalog@index');

Route::get('/catalog/{link}', 'Catalog@childs');

Route::get('/actions/{id}', 'Actions');

Route::get('/contacts', 'Contacts');

Route::get('user/{id}', function ($id) {
    dd( 'User '.$id );
});
