<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubtaskController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// routes/web.php or routes/api.php
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/edit', 'ProjectController@edit')->name('projects.edit');
Route::get('/projects/create', 'ProjectController@create')->name('projects.create');
Route::get('/projects/destroy', 'ProjectController@destroy')->name('projects.destroy');


Route::get('/subtasks/{project}', [SubtaskController::class, 'index'])->name('subtasks.index');



require __DIR__.'/auth.php';
