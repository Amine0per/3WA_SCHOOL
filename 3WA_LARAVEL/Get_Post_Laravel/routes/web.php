<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Acceuil');
});

Route::get('/Contact', 'App\Http\Controllers\ContactController@ShowContact')->name('Contact');
Route::get('/Acceuil', 'App\Http\Controllers\AcceuilController@ShowAcceuil')->name('Acceuil');
Route::post('/Submit-form', 'App\Http\Controllers\ContactController@SubmitForm');


