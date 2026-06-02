<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\StudentController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index']);
Route::get('/Student', [StudentController::class, 'index'])->name('Student.index');
Route::get('/Student/create', [StudentController::class, 'create'])->name('Student.create');
Route::post('/Student/store', [StudentController::class, 'store'])->name('Student.store');
Route::get('/Student/{student}edit', [StudentController::class, 'edit'])->name('Student.edit');
Route::put('/Student/{student}', [StudentController::class, 'update'])->name('Student.update');
Route::delete('/Student/{student}', [StudentController::class, 'destroy'])->name('Student.destroy');

// soft deletes
Route::get('/Student/trash', [StudentController::class, 'trash'])->name('Student.trash');
Route::put('/Student/{student}/restore', [StudentController::class, 'restore'])->name('Student.restore')->withTrashed();
Route::delete('/Student/{student}/force-delete', [StudentController::class, 'forceDelete'])->name('Student.forceDelete')->withTrashed();

route:: resource('department', DepartmentController::class);
route:: resource('lecturer', LecturerController::class);
route:: resource('organization', OrganizationController::class);