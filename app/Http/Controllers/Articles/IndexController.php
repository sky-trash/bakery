<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Http\Filters\ArticlesFilter;
use App\Http\Requests\Article\FilterRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ArticlesFilter::class, ['queryParams' => array_filter($data)]);

        $articles = Article::filter($filter)->get();

        return view('articles.index', compact('articles'));
    }
}
