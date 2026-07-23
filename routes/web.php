<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// THE REAL GAS
Route::name('student.')->prefix('student')->group(function () {
    Route::get('/', function () {
        return "main students data cuh";
    })->name('index');

    Route::get('/detail', function () {
        return "show all students data cuh";
    })->name('show');

    Route::get('/detail/{id}', function ($id) {
        return "Show one students data cuh: {$id}";
    })->name('show');

    Route::get('/create', function () {
        return "create new students data cuh";
    })->name('create');

    Route::get('/edit/{id}', function ($id) {
        return "edit students data cuh: {$id}";
    })->name('edit');

    Route::post('/store', function () {
        return "store new students data cuh";
    })->name('store');

    Route::put('/update/{id}', function ($id) {
        return "update students data cuh: {$id}";
    })->name('update');

    Route::delete('/destroy/{id}', function ($id) {
        return "destroy students data cuh: {$id}";
    })->name('destroy');
});


Route::name('Teacher.')->prefix('Teacher')->group(function () {
    Route::get('/', function () {
        return "main teachers data cuh";
    })->name('index');

    Route::get('/detail', function () {
        return "show all teachers data cuh";
    })->name('show');

    Route::get('/detail/{id}', function ($id) {
        return "Show one teachers data cuh: {$id}";
    })->name('show');

    Route::get('/create', function () {
        return "create new teachers data cuh";
    })->name('create');

    Route::get('/edit/{id}', function ($id) {
        return "edit teachers data cuh: {$id}";
    })->name('edit');

    Route::post('/store', function () {
        return "store new teachers data cuh";
    })->name('store');

    Route::put('/update/{id}', function ($id) {
        return "update teachers data cuh: {$id}";
    })->name('update');

    Route::delete('/destroy/{id}', function ($id) {
        return "destroy teachers data cuh: {$id}";
    })->name('destroy');
});



Route::name('SchoolClass.')->prefix('SchoolClass')->group(function () {
    Route::get('/', function () {
        return "main SchoolClass data cuh";
    })->name('index');

    Route::get('/detail', function () {
        return "show all SchoolClass data cuh";
    })->name('show');

    Route::get('/detail/{id}', function ($id) {
        return "Show one SchoolClass data cuh: {$id}";
    })->name('show');

    Route::get('/create', function () {
        return "create new SchoolClass data cuh";
    })->name('create');

    Route::get('/edit/{id}', function ($id) {
        return "edit SchoolClass data cuh: {$id}";
    })->name('edit');

    Route::post('/store', function () {
        return "store new SchoolClass data cuh";
    })->name('store');

    Route::put('/update/{id}', function ($id) {
        return "update SchoolClass data cuh: {$id}";
    })->name('update');

    Route::delete('/destroy/{id}', function ($id) {
        return "destroy SchoolClass data cuh: {$id}";
    })->name('destroy');
});



Route::name('Major.')->prefix('Major')->group(function () {
    Route::get('/', function () {
        return "main Major data cuh";
    })->name('index');

    Route::get('/detail', function () {
        return "show all Major data cuh";
    })->name('show');

    Route::get('/detail/{id}', function ($id) {
        return "Show one Major data cuh: {$id}";
    })->name('show');

    Route::get('/create', function () {
        return "create new Major data cuh";
    })->name('create');

    Route::get('/edit/{id}', function ($id) {
        return "edit Major data cuh: {$id}";
    })->name('edit');

    Route::post('/store', function () {
        return "store new Major data cuh";
    })->name('store');

    Route::put('/update/{id}', function ($id) {
        return "update Major data cuh: {$id}";
    })->name('update');

    Route::delete('/destroy/{id}', function ($id) {
        return "destroy Major data cuh: {$id}";
    })->name('destroy');
});