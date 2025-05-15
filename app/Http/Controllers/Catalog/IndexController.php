<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Http\Filters\CatalogFilter;
use App\Http\Requests\Catalog\FilterRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(CatalogFilter::class, ['queryParams' => array_filter($data)]);
        $catalogs = Product::filter($filter)->paginate(8);

        return view('catalogs.index', compact('catalogs'));
    }
}
