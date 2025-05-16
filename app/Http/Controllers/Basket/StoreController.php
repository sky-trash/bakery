<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Http\Requests\Basket\StoreRequest;
use App\Models\Basket;
use App\Models\Order;
use App\Models\Order_product;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $data = $request->validated();

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

            return redirect()
                ->route('basket.index')
                ->with('success', 'Покупка успешно оформлена! Спасибо за заказ!');

        } catch (Exception $e) {
            return redirect()
                ->route('basket.index')
                ->with([
                    'error' => 'При добавление произошла ошибка, обратитесь пожалуйста в поддержку.',
                    'telegram_link' => 'https://t.me/user_Kirillka',
                    'telegram_text' => 'Telegram - @user_Kirillka'
                ]);
        }
    }
}
