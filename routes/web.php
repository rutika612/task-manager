<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::resource('tasks', TaskController::class)->except(['show', 'create']);

// Add this line for “Mark task as completed”
Route::put('tasks/{task}/complete', [TaskController::class, 'markComplete'])->name('tasks.complete');
