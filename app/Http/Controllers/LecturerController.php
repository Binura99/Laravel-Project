<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller

{

    public function index()
    {
        return Lecturer::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:lecturers',
            'department' => 'required',
            'phone_number' => 'required'
        ]);

        Lecturer::create($request->all());

        return response()->json(['message' => 'Lecturer created successfully']);
    }


    public function update(Request $request, $id)
    {
        $lecturer = Lecturer::findOrFail($id);
        $lecturer->update($request->all());

        return response()->json(['message' => 'Lecturer updated successfully']);
    }

    public function destroy($id)
    {
        Lecturer::destroy($id);

        return response()->json(['message' => 'Lecturer deleted successfully']);
    }
}
