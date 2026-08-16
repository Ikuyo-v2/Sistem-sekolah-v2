<?php

namespace App\Http\Controllers\SchoolClass;

use Illuminate\Http\Request;

class editController
{
    public function __invoke(Request $request, $id)
    {
        return $this->edit($id);
    }

    public function edit($id)
    {
        $title = 'Sistem Sekolah - Edit Kelas';

        $classes = [
            ['id' => 1, 'name' => 'XII AKL 1', 'grade' => 'XII', 'major' => 'AKL', 'homeroom_teacher' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'XII TKJ 1', 'grade' => 'XII', 'major' => 'TKJ', 'homeroom_teacher' => 'Siti Aminah'],
        ];

        $class = collect($classes)->firstWhere('id', (int) $id);

        abort_if(!$class, 404);

        $majors = [
            ['id' => 1, 'code' => 'AKL', 'name' => 'Akuntansi dan Keuangan Lembaga'],
            ['id' => 2, 'code' => 'TKJ', 'name' => 'Teknik Komputer dan Jaringan'],
            ['id' => 3, 'code' => 'BD', 'name' => 'Bisnis Digital'],
        ];

        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Aminah'],
        ];

        return view('classes.edit', compact('title', 'class', 'majors', 'teachers'));
    }
}