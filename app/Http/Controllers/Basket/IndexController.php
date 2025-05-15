<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $this->authorize('view-user', auth()->user());

        $user = auth()->user();

        $basket = $user->baskets()->with('product')->get();

        $price = $basket->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });
$userId = $user->id;

        return view('basket.index', compact('basket', 'price', 'userId'));
    }
}
