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
        $news = News::orderBy('date', 'desc')->paginate(4, ['*'], 'news_page');
        $promotion = Promotion::orderBy('date', 'desc')->paginate(4, ['*'], 'promotion_page');
        return view('home.index', compact('news', 'promotion'));
    }
}
