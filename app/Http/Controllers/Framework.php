<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Framework as FrameworkModel;

class Framework extends Controller
{
    public function index()
    {
        $frameworks = FrameworkModel::select('id', 'name', 'owner', 'language', 'picturePath')->get()->toArray();
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
            'file' => 'required|file|mimes:jpeg,png,gif|max:2048|image'
        ]);

        $filenameWithExt = $validatedData['file']->getClientOriginalName();
        $extension = $validatedData['file']->getClientOriginalExtension();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $filenameToStore = $filename . '_' . time() . '.' . $extension;
        $validatedData['file']->storeAs('public/files', $filenameToStore);

        $store = new FrameworkModel;
        $store->name = $validatedData['name'];
        $store->owner = $validatedData['owner'];
        $store->language = $validatedData['language'];
        $store->picturePath = $filenameToStore;
        $store->save();
        return redirect()->route('framework.index');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'owner' => 'required',
            'language' => 'required',
            'file' => 'required|file|mimes:jpeg,png,gif|max:2048'
        ]);

        $store = FrameworkModel::find($id);

        Storage::delete('public/files/' . $store->picturePath);

        $filenameWithExt = $validatedData['file']->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $validatedData['file']->getClientOriginalExtension();
        $filenameToStore = $filename . '_' . time() . '.' . $extension;
        $validatedData['file']->storeAs('public/files', $filenameToStore);

        $store->name = $validatedData['name'];
        $store->owner = $validatedData['owner'];
        $store->language = $validatedData['language'];
        $store->picturePath = $filenameToStore;
        $store->save();
        return redirect()->route('framework.index');
    }

    public function destroy(FrameworkModel $framework)
    {
        Storage::delete('public/files/' . $framework->picturePath);
        $framework->delete();
        return redirect()->route('framework.index');
    }
}
