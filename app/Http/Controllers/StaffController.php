<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffMembers = Staff::all();

        return response()->json($staffMembers);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|sometimes|image',
        ]);
        $image = $request->file('image');

        if ($image) {
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('images/', $image_new_name);
        }

        $update = new Staff([
            'name'   => $request->input('name'),
            'description' => $request->input('description'),
            'image'   => $image_new_name,
        ]);
        $update->save();
        return response()->json('Update created!');
    }

    public function update(Request $request, Staff $staffMember)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $staffMember->update($request->all());

        return response()->json($staffMember, 200);
    }

    public function destroy(Staff $staffMember)
    {
        $staffMember->delete();

        return response()->json(null, 204);
    }
}
