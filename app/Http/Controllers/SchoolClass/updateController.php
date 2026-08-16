<?php

namespace App\Http\Controllers\SchoolClass;

use Illuminate\Http\Request;

class updateController
{
    public function __invoke(Request $request, $id)
    {
        return $this->update($request, $id);
    }

    public function update(Request $request, $id)
    {
        return "update class data cuh: {$id}";
    }
}
