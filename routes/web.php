<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index']);

Route::get('/Student', [StudentController::class, 'index'])->name('Student.index');
Route::get('/Student/create', [StudentController::class, 'create'])->name('Student.create');
Route::post('/Student/store', [StudentController::class, 'store'])->name('Student.store');
Route::get('/Student/{Student}edit', [StudentController::class, 'edit'])->name('Student.edit');
Route::put('/Student/{Student}', [StudentController::class, 'update'])->name('Student.update');
Route::delete('/Student/{Student}', [StudentController::class, 'destroy'])->name('Student.destroy');

