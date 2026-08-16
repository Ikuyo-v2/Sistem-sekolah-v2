<?php

namespace App\Http\Controllers\SchoolClass;

use Illuminate\Http\Request;

class destroyController
{
    public function __invoke(Request $request, $id)
    {
        return $this->destroy($id);
    }

    public function destroy($id)
    {
        return "destroy class data cuh: {$id}";
    }
}
