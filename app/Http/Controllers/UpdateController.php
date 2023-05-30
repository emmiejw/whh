<?php

namespace App\Http\Controllers;

use App\Models\Update;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index(): array
    {
        $updates = Update::all()->toArray();
        return array_reverse($updates);
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|sometimes|image',
        ]);

        $image = $request->file('image');

        if ($image) {
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('images/', $image_new_name);
        }

        $update = new Update([
            'title'   => $request->input('title'),
            'content' => $request->input('content'),
            'image'   => $image_new_name,
        ]);
        $update->save();
        return response()->json('Update created!');
    }

    public function update($id, Request $request): \Illuminate\Http\JsonResponse
    {
        $update = Update::find($id);
        $update->update($request->all());
        return response()->json('Update updated!');
    }
    public function destroy(Update $update): \Illuminate\Http\JsonResponse
    {
        $update->delete();

        return response()->json(null, 204);
    }
}
