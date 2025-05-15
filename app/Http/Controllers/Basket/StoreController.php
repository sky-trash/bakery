<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Http\Requests\Basket\StoreRequest;
use App\Models\Basket;
use App\Models\Order;
use App\Models\Order_product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        DB::transaction(function () use ($request, $data) {
            $data['order_number'] = 'ORD-' . now()->format('YmdHis') . '-' . rand(1000, 9999);
            $data['status'] = 'новый';

            $order = Order::create($data);

            foreach ($request->input('product_id') as $key => $productId) {
                Order_product::create([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'quantity' => $request->input('quantitys')[$key]
                ]);
            }

            Basket::where('user_id', $data['user_id'])->delete();
        });

        return redirect()->route('basket.index');
    }
}
