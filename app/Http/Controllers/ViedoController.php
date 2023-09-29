<?php

namespace App\Http\Controllers;

use App\Models\Viedo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ViedoController extends Controller
{

    public function index()
    {
        $viedos = Viedo::get();
        return view('viedo.index', compact('viedos'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'link' => 'required',
            'image' => 'nullable',
        ], [
            'required' => __('required'),
        ]);
        if ($request->has('image')) {
            $validatedData['image'] = $request->image->store('viedo', 'public');
        }
        Viedo::create($validatedData);
        return redirect()->back()
            ->with('success', __('saved successfully'));
    }

    public function update(Request $request, Viedo $viedo)
    {
        $validatedData = $request->validate([
            'link' => 'required',
            'image' => 'nullable',
        ], [
            'required' => __('required'),
        ]);
        if ($request->hasFile('image')) {
            File::delete('storage/' . $viedo->image);
            $validatedData['image'] = $request->image->store('viedo', 'public');
        }
        $viedo->update($validatedData);
        return redirect()->back()
            ->with('success', __('Updated successfully.'));
    }

    public function destroy($id)
    {
        $viedo = Viedo::findOrFail($id);
        $viedo->delete();
        File::delete('storage/' . $viedo->logo);
        return redirect()->back()->with('success', 'deleted successfully');
    }
}
