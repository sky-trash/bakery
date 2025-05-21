<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {

        $user = auth()->user();
        $orders = $user->orders()->with(['order_product.product'])->paginate(5);
        $userId = $user->id;
        return view('cabinet.index', compact('orders', 'userId'));
    }
}
