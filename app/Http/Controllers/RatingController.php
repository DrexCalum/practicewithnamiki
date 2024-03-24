<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    //
    public function store(Request $request) {
        $rating = Rating::create([
            'user_id' => auth()->user()->id, // Assuming ratings are associated with authenticated users
            'item_id' => $request->item_id,
            'rating' => $request->rating
        ]);

        return response()->json(['success' => true]);
    }
}
