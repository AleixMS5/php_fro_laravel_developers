<?php

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

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/tasks', function () {
//    $task1 =Task::create([
//        'title'=>'tasca1',
//        'description'=>'tasca1',
//        'completed'=>0
//    ]);
//
//    $tasks = [
//        $task1
//    ];
    return view('tasks',['tasks'=>Task::all()]);
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/index', function () {
//    $task1 =Task::create([
//        'title'=>'tasca1',
//        'description'=>'tasca1',
//        'completed'=>0
//    ]);
//    $tasks = [
//        $task1
//    ];
    return view('tasks',['tasks'=>Task::all()]);
});
