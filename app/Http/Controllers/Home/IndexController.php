<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Promotion;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $news = News::orderBy('date', 'desc')->get();
        $promotion = Promotion::orderBy('date', 'desc')->get();
        return view('home.index', compact('news', 'promotion'));
    }
}
