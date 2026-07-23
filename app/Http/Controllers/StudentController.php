<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController
{
    public function index()
    {
        return "main students data cuh";
    }

    public function detail($id)
    {
        return "Show one students data cuh: {$id}";
    }

    public function show()
    {
        return "show all students data cuh";
    }

    public function create()
    {
        return "create new students data cuh";
    }

    public function edit($id)
    {
        return "edit students data cuh: {$id}";
    }
    
    public function store()
    {
        return "store new students data cuh";
    }

    public function update($id)
    {
        return "update students data cuh: {$id}";
    }

    public function destroy($id)
    {
        return "destroy students data cuh: {$id}";
    }
}
