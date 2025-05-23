<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Product;
use App\Models\Sales_statistics;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $articles = Article::paginate(10);
        return view('admin.articles.index', compact('articles'));
    }
}
