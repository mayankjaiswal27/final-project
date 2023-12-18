<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubtaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('projects', ProjectController::class);
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::get('/projects/{project}/destroy', [ProjectController::class, 'destroy'])->name('projects.destroy');

    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    

Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
});

Route::get('/subtasks/{project}', [SubtaskController::class, 'index'])->name('subtasks.index');
Route::get('/subtasks/create', [SubtaskController::class, 'create'])->name('subtasks.create');
    Route::post('/subtasks/{project}', [SubtaskController::class, 'store'])->name('subtasks.store');
    Route::get('/subtasks/{project}/{subtask}/edit', [SubtaskController::class, 'edit'])->name('subtasks.edit');
    Route::patch('/subtasks/{project}/{subtask}', [SubtaskController::class, 'update'])->name('subtasks.update');
    Route::delete('/subtasks/{project}/{subtask}', [SubtaskController::class, 'destroy'])->name('subtasks.destroy');

require __DIR__.'/auth.php';
