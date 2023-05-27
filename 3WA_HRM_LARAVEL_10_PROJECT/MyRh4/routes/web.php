<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperAdminController;

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
    return view('accueil');
});


Route::get('login', [AuthController::class, 'index']);

Route::post('login', [AuthController::class, 'login']);

Route::get('logout', [AuthController::class, 'logout']);

Route::get('forgot-password', [AuthController::class, 'forgotpassword']);

Route::post('forgot-password', [AuthController::class, 'PostForgotPassword']);

Route::get('reset/{token}', [AuthController::class, 'reset']);

Route::post('reset/{token}', [AuthController::class, 'PostReset']);





Route::group(['middleware' => 'superadmin'], function () {

    Route::get('superadmin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('superadmin/superadmin/list', [SuperAdminController::class, 'list']);
    Route::get('superadmin/superadmin/add', [SuperAdminController::class, 'add']);
    Route::post('superadmin/superadmin/add', [SuperAdminController::class, 'insert']);
    Route::get('superadmin/superadmin/edit/{id}', [SuperAdminController::class, 'edit']);
    Route::post('superadmin/superadmin/edit/{id}', [SuperAdminController::class, 'update']);
    Route::get('superadmin/superadmin/delete/{id}', [SuperAdminController::class, 'delete']);
});


Route::group(['middleware' => 'admin'], function () {

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

});

Route::group(['middleware' => 'employe'], function () {

    Route::get('employe/dashboard', [DashboardController::class, 'dashboard']);
    
});