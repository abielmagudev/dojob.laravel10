<?php

use App\Http\Controllers\ApiExtensionComponentController;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::resource('extensions', ExtensionController::class);
Route::resource('jobs', JobController::class);
Route::resource('tasks', TaskController::class);
Route::get('extensions_components/{task_id}/{type}', ApiExtensionComponentController::class)->name('extensions.components');

Route::get('/', function () {
    return view('welcome');
});
