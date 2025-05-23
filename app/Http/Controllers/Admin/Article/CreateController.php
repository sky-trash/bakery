<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\CreateRequest;
use App\Models\Sales_statistics;
use App\Models\Type;
use App\Models\TypeArticle;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke()
    {
        $type = TypeArticle::all();
        return view('admin.articles.create', compact('type'));
    }
}
