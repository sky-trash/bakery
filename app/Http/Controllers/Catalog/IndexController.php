<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Http\Filters\CatalogFilter;
use App\Http\Requests\Catalog\FilterRequest;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(CatalogFilter::class, ['queryParams' => array_filter($data)]);
        $catalogs = Product::filter($filter)->with('type')->paginate(8);
        $user = auth()->user();

        return view('catalogs.index', compact('catalogs', 'user'));
    }
}
