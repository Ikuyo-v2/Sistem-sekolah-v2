<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController
{
    public function index()
    {
        return "index students data cuh";
    }
    public function show($id)
    {
        return "show one students data cuh: {$id}";
    }
    public function create()
    {
        return "create new students data cuh";
    }
    Public function edit($id)
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
