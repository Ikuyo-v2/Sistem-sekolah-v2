<?php

namespace App\Http\Controllers\SchoolClass;

use Illuminate\Http\Request;

class storeController
{
    public function __invoke(Request $request)
    {
        return $this->store($request);
    }

    public function store(Request $request)
    {
        return 'store new class data cuh';
    }
}
