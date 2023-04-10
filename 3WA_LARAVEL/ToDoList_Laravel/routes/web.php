<?php

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

Route::get('/tasks', [ToDoListController::class, 'index'])->name('tasks.index');

Route::get('/newtask', [ToDoListController::class, 'create'])->name('tasks.create');

Route::post('/tasks', [ToDoListController::class, 'store'])->name('tasks.store');

Route::get('/edit/{id}', [ToDoListController::class, 'edit'])->name('tasks.edit');

Route::put('/tasks/{id}', [ToDoListController::class, 'update'])->name('tasks.update');

Route::get('/tasks/{id}', [ToDoListController::class, 'show'])->name('tasks.show');

Route::delete('/delete/{id}', [ToDoListController::class, 'destroy'])->name('tasks.destroy');

Route::put('/tasks/{id}', [ToDoListController::class, 'done'])->name('tasks.done');
