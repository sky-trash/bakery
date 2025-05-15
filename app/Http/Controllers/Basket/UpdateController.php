<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Http\Requests\Basket\StoreRequest;
use App\Http\Requests\Basket\UpdateRequest;
use App\Models\Basket;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request)
    {
        $data = $request->validated();

        $basketItem = Basket::where('id', $data['basket_id'])
            ->where('user_id', auth()->id())
            ->firstOrFail();

        if ($data['action'] == 'plus') {
            $basketItem->increment('quantity');
        } else {
            if ($basketItem->quantity <= 1) {
                $basketItem->delete();
                return redirect()->route('basket.index');
            } else {
                $basketItem->decrement('quantity');
            }
        }

        return redirect()->route('basket.index');
    }
}
