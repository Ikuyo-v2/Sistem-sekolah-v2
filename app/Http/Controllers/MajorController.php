<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController
{
    private function getMajors(): array
    {
        return [
            ['id' => 1, 'code' => 'AKL', 'name' => 'Akuntansi dan Keuangan Lembaga', 'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.'],
            ['id' => 2, 'code' => 'TKJ', 'name' => 'Teknik Komputer dan Jaringan', 'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.'],
            ['id' => 3, 'code' => 'BD', 'name' => 'Bisnis Digital', 'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.'],
        ];
    }

    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Jurusan';
        $majors = $this->getMajors();

        return view('majors.index', compact('title', 'majors'));
    }

    public function show($id)
    {
        $title = 'Sistem Sekolah - Detail Jurusan';
        $major = collect($this->getMajors())->firstWhere('id', (int) $id);

        abort_if(!$major, 404);

        return view('majors.show', compact('title', 'major'));
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Jurusan';

        return view('majors.create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Sistem Sekolah - Edit Jurusan';
        $major = collect($this->getMajors())->firstWhere('id', (int) $id);

        abort_if(!$major, 404);

        return view('majors.edit', compact('title', 'major'));
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