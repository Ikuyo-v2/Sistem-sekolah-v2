<?php

use App\Http\Controllers\SchoolClass\createController;
use App\Http\Controllers\SchoolClass\destroyController;
use App\Http\Controllers\SchoolClass\editController;
use App\Http\Controllers\SchoolClass\indexController;
use App\Http\Controllers\SchoolClass\showController;
use App\Http\Controllers\SchoolClass\storeController;
use App\Http\Controllers\SchoolClass\updateController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MajorController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// THE REAL GAS
Route::name('students.')->prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/{id}', [StudentController::class, 'show'])->name('show')->whereNumber('id');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit')->whereNumber('id');
    Route::post('/', [StudentController::class, 'store'])->name('store');
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

Route::name('teachers.')->prefix('teachers')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show')->whereNumber('id');
    Route::get('/create', [TeacherController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');
    Route::post('/', [TeacherController::class, 'store'])->name('store');
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});

Route::name('classes.')->prefix('classes')->group(function () {
    Route::get('/', [indexController::class, 'index'])->name('index');
    Route::get('/{id}', [showController::class, 'show'])->name('show');
    Route::get('/create', [createController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [editController::class, 'edit'])->name('edit');
    Route::post('/', [storeController::class, 'store'])->name('store');
    Route::put('/{id}', [updateController::class, 'update'])->name('update');
    Route::delete('/{id}', [destroyController::class, 'destroy'])->name('destroy');
});

Route::resource('majors', MajorController::class);