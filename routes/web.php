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
Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/card/random', 'CardController@random')->name('card.random');

Route::get('/card/random/commander', 'CardController@randomCommander')->name('card.random.commander');

Route::post('/card/find', 'CardController@findByName')->name('card.find.name');

Route::get('/sets', 'SetController@getAllSets')->name('sets');

