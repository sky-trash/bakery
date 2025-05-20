<?php

namespace App\Http\Controllers\Reviews;

use App\Http\Controllers\Controller;
use App\Models\Review;

class IndexController extends Controller
{
    public function __invoke()
    {
        $reviews = Review::with('user')->orderByDesc('date')->get();
        return view('reviews.index', compact('reviews'));
    }
}
