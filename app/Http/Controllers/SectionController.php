<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SectionController extends Controller
{

    public function index()
    {
        $sections = Section::with('category')->get();
        $categories = Category::get(['id','name']);
        return view('section.index', compact('sections','categories'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required',
        ], [
            'required' => __('required'),
            'mimes' => __('mimes'),
            'string' => __('string'),
            'regex' => __('regex'),
        ]);
        if ($request->has('image')) {
            $validatedData['image'] = $request->image->store('section', 'public');
        }
        Section::create($validatedData);
        return redirect()->back()
            ->with('success', __('saved successfully'));
    }

    public function update(Request $request, Section $section)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'nullable',
        ], [
            'required' => __('required'),
            'mimes' => __('mimes'),
            'string' => __('string'),
            'regex' => __('regex'),
        ]);
        if ($request->hasFile('image')) {
            File::delete('storage/' . $section->image);
            $validatedData['image'] = $request->image->store('section', 'public');
        }
        $section->update($validatedData);
        return redirect()->back()
            ->with('success', __('Updated successfully.'));
    }

    public function destroy($id)
    {
        $section = Section::findOrFail($id);
        $section->delete();
        File::delete('storage/' . $section->image);
        return redirect()->back()->with('success', 'deleted successfully');
    }

}