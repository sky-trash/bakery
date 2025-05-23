<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Article;
use App\Models\Product;
use App\Models\Sales_statistics;
use App\Models\Type;
use App\Models\TypeArticle;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Article $article)
    {
        $type = TypeArticle::all();
        return view('admin.articles.edit', compact('article', 'type'));
    }
}
