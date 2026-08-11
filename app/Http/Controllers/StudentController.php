<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController
{
    public function index()
    {
        $title = 'Sistem Sekolah - dafter siswa cuh';
        $students = [
            ['id' => 1, 'name' => 'John kohk', 'NIS' => 1001, 'class' => 'XII TKJ 1', 'Jurusan' => 'TKJ'],
            ['id' => 2, 'name' => 'Migguel', 'NIS' => 1002, 'class' => 'XII TKJ 2', 'Jurusan' => 'TKJ'],
            ['id' => 3, 'name' => 'Neckgurr', 'NIS' => 1003, 'class' => 'XII TKA 3', 'Jurusan' => 'TKA'],
            ['id' => 4, 'name' => 'Tom Pearl', 'NIS' => 1004, 'class' => 'XII TKA 3', 'Jurusan' => 'TKA'],
            
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }
    public function show($id)
    {
        $title = 'Sistem Sekolah - dafter siswa cuh';
        return view('students.show', 
        ['title' => $title,]);
    }
    public function create()
    {
        $title = 'Sistem Sekolah - dafter siswa cuh';
        return view('students.create', [
        'title' => $title,
        ]);
    }
    Public function edit($id)
    {
        $title = 'Sistem Sekolah - dafter siswa cuh';
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