<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $news = News::orderBy('date', 'desc')->get();
        return view('articles.index', compact('news'));
    }
}
