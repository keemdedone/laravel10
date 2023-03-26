<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Framework as Frameworks;

class Framework extends Controller
{
    public function FunctionName(Frameworks $frameworks)
    {
        $frameworks = Frameworks::select('name', 'owner', 'language')->get()->toArray();
        return $frameworks;
    }
}
