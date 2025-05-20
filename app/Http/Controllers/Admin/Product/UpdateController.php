<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Sales_statistics;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke()
    {
        return view('admin.products.index');
    }
}
