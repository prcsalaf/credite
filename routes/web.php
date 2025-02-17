<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/z', function () {
    return view('welcome');
});
Route::get('/s', function () {
    return view('scane');
});

Route::get('/o', function () {
    return view('ocr');
});
Route::post('/pdf/upload', 'App\Http\Controllers\CreditController@OCRtst');


Route::get('/','App\Http\Controllers\RegleController@list' );
Route::get('regle','App\Http\Controllers\RegleController@list' );

Route::get('listregle', 'App\Http\Controllers\RegleController@listregle');

Route::get('listcr', 'App\Http\Controllers\CreditController@show');
Route::post('credit/ajouter', 'App\Http\Controllers\CreditController@add');


