<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Product;
use App\Models\Sales_statistics;
use App\Models\Type;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $type = Type::all();
        return view('admin.products.edit', compact('product', 'type'));
    }
}
