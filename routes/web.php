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
Route::get('/', function()
{
  return view('giris');
});
Route::get('/dialog', function()
{
  return view('dialog');
});


Route::get('/k', function()
{
  return view('koltuk');
});

Route::get('/cikis', function()
{
  return view('giris');
});
Route::get('/filmekle', function()
{
  return view('filmekle');
});
Route::get('/biletler', function()
{
  return view('biletler');
});
Route::post('/giris','App\Http\Controllers\kullan@kontrol')->name('kayitkontrol');
Route::post('/k','App\Http\Controllers\kullan@alma')->name('musteri');
Route::get('/k','App\Http\Controllers\kullan@goster')->name('goster');
Route::get('/k/{id}',[App\Http\Controllers\kullan::class,'filmadi']);

Route::get('filmekle','App\Http\Controllers\kullan@ekle');
Route::post('filmekle','App\Http\Controllers\kullan@ekle_post');
