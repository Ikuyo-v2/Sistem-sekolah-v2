<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';
        $students = [
            ['id' => 1, 'name' => 'John Pih', 'nis' => 1001, 'class' => 'XII TKJ 1', 'major' => 'TKJ'],
            ['id' => 2, 'name' => 'Migguel', 'nis' => 1002, 'class' => 'XII TKJ 2', 'major' => 'AKL'],
            ['id' => 3, 'name' => 'Neckgurr', 'nis' => 1003, 'class' => 'XII TKA 3', 'major' => 'BID'],
            
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }
    public function show($id)
    {
        $title = 'Sistem Sekolah - Detail Siswa';
        return view('students.show', 
        ['title' => $title,]);
    }
    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Siswa';
        return view('students.create', [
        'title' => $title,
        ]);
    }
    Public function edit($id)
    {
        $title = 'Sistem Sekolah - Edit Siswa';
        return view('students.edit', [

            'title' => $title,
        ]);
    }
    public function store(Request $request)
    {
        return "store new students data cuh";
    }
    public function update(Request $request, $id)
    {
        return "update students data cuh: {$id}";
    }
    public function destroy($id)
    {
        return "destroy students data cuh: {$id}";
    }

}