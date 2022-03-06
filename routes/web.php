<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('jobs.index');
});*/


Route::get('/','App\Http\Controllers\JobsController@newOffer')->name('Nový inzerát');
Route::get('/new-offer','App\Http\Controllers\JobsController@newOffer')->name('Nový inzerát');
Route::get('/new-offer-done','App\Http\Controllers\JobsController@newOfferDone')->name('Nový inzerát uloženo');
Route::post('/new-offer','App\Http\Controllers\JobsController@store')->name('Uložit inzerát');
Route::get('/looking4job','App\Http\Controllers\JobsController@newOffer')->name('Hledám práci');
