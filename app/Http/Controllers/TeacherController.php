<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController
{
    public function index()
    {
        $title = 'Sistem Sekolah - daftar Guru cuh                                                                                                  ';
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone' => '081234560002',
                'status' => 'Aktif',
            ]
        ];  

        return view('teachers.index', [
            'title' => $title,
            'teachers' => $teachers
        ]);
    }
     public function show($id)
    {
        $title = 'Sistem Sekolah - Menampilkan guru cuh';
        return view('teachers.show', 
        ['title' => $title,]);
    }
    public function create()
    {
        $title = 'Sistem Sekolah - Menambahkan guru cuh';
        return view('teachers.create', [
        'title' => $title,
        ]);
    }
    Public function edit($id)
    {
        $title = 'Sistem Sekolah - Mengedit guru cuh';
        return view('teachers.edit', [

            'title' => $title,
        ]);
    }
    public function store(Request $request)
    {
        return "store new teacher data cuh";
    }
    public function update(Request $request, $id)
    {
        return "update teacher data cuh: {$id}";
    }
    public function destroy($id)
    {
        return "destroy teacher data cuh: {$id}";
    }
}
