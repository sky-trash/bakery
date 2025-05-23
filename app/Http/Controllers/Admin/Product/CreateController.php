<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\CreateRequest;
use App\Models\Sales_statistics;
use App\Models\Type;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke()
    {
        $type = Type::all();
        return view('admin.products.create', compact('type'));
    }
}
