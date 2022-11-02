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
    $task1 =  new stdClass();
    $task1->id  =1;
    $task1->title ="task1";
    $task1->description ="task1";
    $task1->completed =1;
    $tasks = [
        $task1
    ];
    return view('tasks',['tasks'=>$tasks]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/tasks', function () {
    $task1 =  new stdClass();
    $task1->id  =1;
    $task1->title ="task1";
    $task1->description ="task1";
    $task1->completed =1;
    $tasks = [
        $task1
    ];
    return view('tasks',['tasks'=>$tasks]);
});
Route::get('/users', function () {
    return view('users');
});

Route::get('/index', function () {
    $task1 =  new stdClass();
    $task1->id  =1;
    $task1->title ="task1";
    $task1->description ="task1";
    $task1->completed =1;
    $tasks = [
        $task1
    ];
    return view('tasks',['tasks'=>$tasks]);
});
