<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController
{
    public function index()
    {
        $title = 'Sistem Sekolah - daftar Jurusan';
        $majors = [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',
            ],
        ];

        return view('majors.index', [
            'title' => $title,
            'majors' => $majors,
        ]);
    }
    public function show($id)
    {
        $title = 'Sistem Sekolah - detail Jurusan';
        $major = [
            'id' => (int) $id,
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
        ];

        return view('majors.show', [
            'title' => $title,
            'major' => $major,
        ]);
    }
    public function create()
    {
        $title = 'Sistem Sekolah - tambah Jurusan';

        return view('majors.create', [
            'title' => $title,
        ]);
    }
    public function edit($id)
    {
        $title = 'Sistem Sekolah - ubah Jurusan';
        $major = [
            'id' => (int) $id,
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
        ];

        return view('majors.edit', [
            'title' => $title,
            'major' => $major,
        ]);
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
