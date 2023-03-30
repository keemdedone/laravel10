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

    public function edit(FrameworkModel $framework)
    {
        return view('pages.framework.edit', compact('framework'));
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

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'owner' => 'required',
            'language' => 'required',
        ]);
        $store = FrameworkModel::find($id);
        $store->name = $validatedData['name'];
        $store->owner = $validatedData['owner'];
        $store->language = $validatedData['language'];
        $store->save();
        return redirect()->route('framework.index');
    }

    public function destroy(FrameworkModel $framework)
    {
        $framework->delete();
        return redirect()->route('framework.index');
    }
}
