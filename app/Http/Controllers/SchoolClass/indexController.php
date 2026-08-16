<?php

namespace App\Http\Controllers\SchoolClass;

use Illuminate\Http\Request;

class indexController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return $this->index();
    }

    public function index()
    {
        $title = 'Sistem Sekolah - daftar Kelas';
        $classes = [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major' => 'AKL',
                'homeroom_teacher' => 'Budi Santoso'
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major' => 'TKJ',
                'homeroom_teacher' => 'Siti Aminah'
            ]
        ];

        return view('classes.index', [
            'title' => $title,
            'classes' => $classes
        ]);
    }
}
