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

        return view('Majors.index', [
            'title' => $title,
            'majors' => $majors,
        ]);
    }
    public function show($id)
    {
        return "show one students data cuh: {$id}";
    }
    public function create()
    {
        return "create new students data cuh";
    }
    public function edit($id)
    {
        return "edit students data cuh: {$id}";
    }
    public function store(Request $request)
    {
        return "store new students data cuh";
    }
    public function update(Request $request, $id)
    {
        return "update students data cuh: {$id}";
    }
    public function destroy($id)
    {
        return "destroy students data cuh: {$id}";
    }
}
