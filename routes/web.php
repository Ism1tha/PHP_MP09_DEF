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
    $task1 = new stdClass();
    $task1->id = 1;
    $task1->title = 'Task 1';
    $task1->description = 'Description 1';
    $task1->completed = false;
    $task2 = new stdClass();
    $task2->id = 2;
    $task2->title = 'Task 2';
    $task2->description = 'Description 2';
    $task2->completed = true;
    $tasks = [
        $task1,
        $task2
    ];
    return view('index', [
        'tasks' => $tasks
    ]);
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

