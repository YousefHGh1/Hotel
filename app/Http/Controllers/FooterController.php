<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FooterController extends Controller
{

    public function index()
    {
        $footers = Footer::get();
        return view('footer.index', compact('footers'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'phone' => 'required',
            'email' => 'required|email',
            'address1' => 'required|string',
            'address2' => 'required|string',
            'link_facebook' => 'required|string',
            'link_instagram' => 'required|string',
            'logo' => 'nullable',
        ], [
            'required' => __('required'),
            'mimes' => __('mimes'),
            'string' => __('string'),
            'regex' => __('regex'),
        ]);
        if ($request->has('logo')) {
            $validatedData['logo'] = $request->logo->store('footer', 'public');
        }
        Footer::create($validatedData);
        return redirect()->back()
            ->with('success', __('saved successfully'));
    }

    public function update(Request $request, Footer $footer)
    {
        $validatedData = $request->validate([
            'phone' => 'required',
            'email' => 'required|email',
            'address1' => 'required|string',
            'address2' => 'required|string',
            'link_facebook' => 'required|string',
            'link_instagram' => 'required|string',
            'logo' => 'nullable|mimes:jpeg,png,jpg,gif',
        ], [
            'required' => __('required'),
            'mimes' => __('mimes'),
            'string' => __('string'),
            'regex' => __('regex'),
        ]);
        if ($request->hasFile('logo')) {
            File::delete('storage/' . $footer->logo);
            $validatedData['logo'] = $request->logo->store('footer', 'public');
        }
        $footer->update($validatedData);
        return redirect()->back()
            ->with('success', __('Updated successfully.'));
    }

    public function destroy($id)
    {
        $footer = Footer::findOrFail($id);
        $footer->delete();
        File::delete('storage/' . $footer->logo);
        return redirect()->back()->with('success', 'deleted successfully');
    }

}