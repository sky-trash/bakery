<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalog\FilterRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
//        $data = $request->validated();
//        $query = Product::query();
//
//        if (isset($data['price'])) {
//            $query->where('price', $data['price']);
//        }
//        $product = $query->get();
//
//        dd($product);

        $catalogs = Product::all();
        return view('catalogs.index', compact('catalogs'));
    }
}
