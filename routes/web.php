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
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::get('/login', [AuthController::class, 'loginView'])->name('login-view');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login-post');
Route::get('/register', [AuthController::class, 'registerView'])->name('register-view');
Route::post('/register', [AuthController::class, 'registerPost'])->name("register-post");
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// THE REAL GAS
Route::prefix('students')->name('students.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->middleware('role:teacher,admin')->name('create');
    Route::post('/', [StudentController::class, 'store'])->middleware('role:teacher,admin')->name('store');
    Route::get('/{student}', [StudentController::class, 'show'])->name('show');
    Route::get('/{student}/edit', [StudentController::class, 'edit'])->middleware('role:teacher,admin')->name('edit');
    Route::match(['put', 'patch'], '/{student}', [StudentController::class, 'update'])->middleware('role:teacher,admin')->name('update');
    Route::delete('/{student}', [StudentController::class, 'destroy'])->middleware('role:teacher,admin')->name('destroy');
});


Route::middleware('auth')->group(function () {
    Route::prefix('teachers')->name('teachers.')->middleware('role:teacher,admin')->group(function () {
        Route::get('/', [TeacherController::class, 'index'])->name('index');
        Route::get('/create', [TeacherController::class, 'create'])->name('create');
        Route::post('/', [TeacherController::class, 'store'])->name('store');
        Route::get('/{teacher}', [TeacherController::class, 'show'])->name('show');
        Route::get('/{teacher}/edit', [TeacherController::class, 'edit'])->name('edit');
        Route::match(['put', 'patch'], '/{teacher}', [TeacherController::class, 'update'])->name('update');
        Route::delete('/{teacher}', [TeacherController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('classes')->name('classes.')->middleware('role:teacher,admin')->group(function () {
        Route::get('/', IndexController::class)->name('index');
        Route::get('/create', CreateController::class)->name('create');
        Route::post('/', StoreController::class)->name('store');
        Route::get('/{class}', ShowController::class)->name('show');
        Route::get('/{class}/edit', EditController::class)->name('edit');
        Route::match(['put', 'patch'], '/{class}', UpdateController::class)->name('update');
        Route::delete('/{class}', DestroyController::class)->name('destroy');
    });

    Route::resource('majors', MajorController::class)->middleware('role:teacher,admin');
});

