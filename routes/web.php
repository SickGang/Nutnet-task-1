<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'index']);
Route::get('/delete/{id}', [TaskController::class, 'destroy'])->name('destroy');
Route::get('/item/{id}', [TaskController::class, 'getItem'])->name('getItem');
Route::get('/update/{id}', [TaskController::class, 'updateItem'])->name('updateItem');
//Route::put('/update/{id}', [TaskController::class, 'updateItem']);