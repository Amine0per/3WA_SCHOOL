<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController; 

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
    return view('welcome');
});






Route::get('/dashboard', [ToDoListController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::put('/tasks/{id}', [ToDoListController::class, 'update'])->name('tasks.update');

Route::post('/dashboard', [ToDoListController::class, 'store'])->name('tasks.store');

Route::get('/edit/{id}', [ToDoListController::class, 'edit'])->name('tasks.edit');




Route::delete('/delete/{id}', [ToDoListController::class, 'destroy'])->name('tasks.destroy');

Route::put('/tasks/{id}/done', [ToDoListController::class, 'done'])->name('tasks.done');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



