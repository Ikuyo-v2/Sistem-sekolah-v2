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
        $title = 'Sistem Sekolah - ubah kelas';

        return view('classes.edit', [
            'title' => $title,
            'id' => $id,
        ]);
    }
}
