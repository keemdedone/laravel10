<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Framework as FrameworkModel;

class Framework extends Controller
{
    public function index()
    {
        $frameworks = FrameworkModel::select('id', 'name', 'owner', 'language')->get()->toArray();
        return view('pages.framework.main', ['data' => $frameworks]);
    }

    public function create()
    {
        return view('pages.framework.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'owner' => 'required',
            'language' => 'required',
        ]);
        $store = new FrameworkModel;
        $store->name = $validatedData['name'];
        $store->owner = $validatedData['owner'];
        $store->language = $validatedData['language'];
        $store->save();
        return redirect()->route('framework.index');
    }

    public function edit($id)
    {
        return view('pages.framework.edit', ['id' => $id]);
    }
}
