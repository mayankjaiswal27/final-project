<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubtaskController;

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

    Route::get('/projects', [ProjectController::class, 'index']);
    Route::get('/projects/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::get('/projects/destroy', [ProjectController::class, 'destroy'])->name('projects.destroy');
});

Route::get('/subtasks/{project}', [SubtaskController::class, 'index'])->name('subtasks.index');
Route::get('/subtasks/{project}/create', [SubtaskController::class, 'create'])->name('subtasks.create');
Route::post('/subtasks/{project}', [SubtaskController::class, 'store'])->name('subtasks.store');
Route::get('/subtasks/{project}/{subtask}/edit', [SubtaskController::class, 'edit'])->name('subtasks.edit');
Route::patch('/subtasks/{project}/{subtask}', [SubtaskController::class, 'update'])->name('subtasks.update');
Route::delete('/subtasks/{project}/{subtask}', [SubtaskController::class, 'destroy'])->name('subtasks.destroy');

require __DIR__.'/auth.php';
