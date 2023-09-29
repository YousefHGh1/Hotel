<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function index()
    {
        $rooms = Room::paginate(10);
        return view('room.index', compact('rooms'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'number' => 'required',
            'name' => 'nullable',
            'size' => 'nullable',
        ], [
            'required' => __('required'),
        ]);

        Room::create($validatedData);
        return redirect()->back()
            ->with('success', __('saved successfully'));
    }

    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'number' => 'required',
            'name' => 'nullable',
            'size' => 'nullable',
        ], [
            'required' => __('required'),
        ]);

        $room->update($validatedData);
        return redirect()->back()
            ->with('success', __('Updated successfully.'));
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->back()->with('success', 'deleted successfully');
    }

}