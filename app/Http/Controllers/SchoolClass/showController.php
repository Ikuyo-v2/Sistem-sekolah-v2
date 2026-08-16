<?php

namespace App\Http\Controllers\SchoolClass;

use Illuminate\Http\Request;

class showController
{
    public function __invoke(Request $request, $id)
    {
        return $this->show($id);
    }

    public function show($id)
    {
        $title = 'Sistem Sekolah - Detail Kelas';

        $classes = [
            ['id' => 1, 'name' => 'XII AKL 1', 'grade' => 'XII', 'major' => 'AKL', 'homeroom_teacher' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'XII TKJ 1', 'grade' => 'XII', 'major' => 'TKJ', 'homeroom_teacher' => 'Siti Aminah'],
        ];

        $class = collect($classes)->firstWhere('id', (int) $id);

        abort_if(!$class, 404);

        return view('classes.show', compact('title', 'class'));
    }
}