<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;


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
    return view('welcome');
})->name('home');

    Route::resource('categories', CategoryController::class);
    Route::resource('priorities', PriorityController::class);
    Route::resource('reminders', ReminderController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('statuses', StatusController::class);
    Route::resource('tasks', TaskController::class);
    Route::resource('users', UserController::class);


