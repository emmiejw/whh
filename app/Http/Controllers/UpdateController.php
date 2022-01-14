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
        $update = new Update([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        $update->save();
        return response()->json('Update created!');
    }
}
