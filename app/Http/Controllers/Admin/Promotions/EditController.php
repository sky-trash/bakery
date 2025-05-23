<?php

namespace App\Http\Controllers\Admin\Promotions;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Sales_statistics;
use App\Models\Type;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Promotion $promotion)
    {
        return view('admin.promotions.edit', compact('promotion'));
    }
}
