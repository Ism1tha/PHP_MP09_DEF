<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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

Route::get('/', [TaskController::class, 'index'])->name('tasks');
Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/contact', function () {
    $title = 'Contacte';
    return view('contact', compact('title'));
})->name('contact');

Route::get('/about', function () {
    $title = 'Sobre nossaltres';
    return view('about', compact('title'));
})->name('about');

