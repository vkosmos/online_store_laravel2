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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    //dd('1234');

    $aaa = new \App\Goods();
    $aaa->name = 'Синхрофазотрон';
    $aaa->description = 'Глюконутый шизоидно-прекрасный с синим отливом безмятежности.';
    $aaa->price = 125;
    $aaa->category_id = 1;
    $aaa->save();
    dd($aaa);

});
