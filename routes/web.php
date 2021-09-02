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

Route::get('/', function () {
    return view('tasks/create');
});
Route::resource('tasks', 'TasksController');
// Route::get('/', [TasksController::class, 'index']);
Route::get('create', [TasksController::class, 'create']);
// Route::get('details/{todo}', [TasksController::class, 'details']);
// Route::get('edit/{todo}', [TasksController::class, 'edit']);
// Route::post('update/{todo}', [TasksController::class, 'update']);
// Route::get('delete/{todo}', [TasksController::class, 'delete']);
// Route::post('tasks.store', [TasksController::class, 'store']);