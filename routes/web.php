<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Models\Task;
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

Route::get('/', [TaskController::class,'index']);

Route::get('/contact', [PagesController::class,'contact']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/tasks', [TaskController::class,'index']);
Route::get('/users', [UserController::class,'index']);
Route::get('/index', [TaskController::class,'index']);
