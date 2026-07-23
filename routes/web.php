<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::name('students.')->prefix('students')->group(function () {
    Route::get('/', function () {
        return "Menampilkan daftar siswa";
    })->name('index');
    Route::get('/{id}', function ($id) {
        return "Menampilkan detail siswa dengan id: {$id}";
    })->name('show');
});
// Route::get('/students', function () {
//     return "Menampilkan daftar siswaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaad";
// })->name('students.index');
// Route::get('/students/{id}', function ($id) {
//     return "Menampilkan detail siswa dengan id: {$id}";
// })->name('students.show');

