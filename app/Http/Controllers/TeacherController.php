<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController
{
    private function getTeachers(): array
    {
        return [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone_number' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone_number' => '081234560002',
                'status' => 'Aktif',
            ],
        ];
    }

    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Guru';
        $teachers = $this->getTeachers();

        return view('teachers.index', compact('title', 'teachers'));
    }

    public function show($id)
    {
        $title = 'Sistem Sekolah - Detail Guru';
        $teacher = collect($this->getTeachers())->firstWhere('id', (int) $id);

        abort_if(!$teacher, 404);

        return view('teachers.show', compact('title', 'teacher'));
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Guru';

        return view('teachers.create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Sistem Sekolah - Edit Guru';
        $teacher = collect($this->getTeachers())->firstWhere('id', (int) $id);

        abort_if(!$teacher, 404);

        return view('teachers.edit', compact('title', 'teacher'));
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}