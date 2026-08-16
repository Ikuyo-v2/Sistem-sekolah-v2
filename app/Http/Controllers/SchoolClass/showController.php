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
        $title = 'Sistem Sekolah - detail kelas';

        return view('classes.show', [
            'title' => $title,
            'id' => $id,
        ]);
    }
}
