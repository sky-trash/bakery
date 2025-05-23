<?php

namespace App\Http\Controllers\Admin\Reviews;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Product;
use App\Models\Review;
use App\Models\Sales_statistics;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $reviews = Review::paginate(10);
        return view('admin.reviews.index', compact('reviews'));
    }
}
