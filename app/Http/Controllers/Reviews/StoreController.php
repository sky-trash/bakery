<?php

namespace App\Http\Controllers\Reviews;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $data['user_id'] = auth()->id();
        $data['date'] = now();

        Review::create($data);

        return redirect()->route('reviews.index')->with('success', 'Отзыв успешно добавлен!');
    }
}
