<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController
{
        public function index()
    {
        return "index teacher data cuh";
    }
    public function show($id)
    {
        return "show one teacher data cuh: {$id}";
    }
    public function create()
    {
        return "create new teacher data cuh";
    }
    Public function edit($id)
    {
        return "edit teacher data cuh: {$id}";
    }
    public function store(Request $request)
    {
        return "store new teacher data cuh";
    }
    public function update(Request $request, $id)
    {
        return "update teacher data cuh: {$id}";
    }
    public function destroy($id)
    {
        return "destroy teacher data cuh: {$id}";
    }
}
