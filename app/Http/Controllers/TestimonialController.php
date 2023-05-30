<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(): array
    {
        $testimonials = Testimonial::all()->toArray();
        return array_reverse($testimonials);
    }
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $testimonial = new Testimonial(['name' => $request->input('name'), 'comment' => $request->input('comment') ]);
        $testimonial->save();
        return response()
            ->json('Review created!')
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'POST');
    }
    public function destroy(Testimonial $testimonial): \Illuminate\Http\JsonResponse
    {
        $testimonial->delete();

        return response()->json(null, 204);
    }
}
