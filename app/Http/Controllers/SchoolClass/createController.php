<?php

namespace App\Http\Controllers\SchoolClass;

use Illuminate\Http\Request;

class createController
{
    public function __invoke(Request $request)
    {
        return $this->create();
    }

    public function create()
    {
        $title = 'Sistem Sekolah - tambah kelas';

        return view('classes.create', [
            'title' => $title,
        ]);
    }
}
