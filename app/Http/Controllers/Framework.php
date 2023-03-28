<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Framework as Frameworks;

class Framework extends Controller
{
    public function getFrameworks(Frameworks $frameworks)
    {
        $frameworks = Frameworks::select('name', 'owner', 'language')->get()->toArray();
        return view('pages.framework', ['data' => $frameworks]);
    }
}
