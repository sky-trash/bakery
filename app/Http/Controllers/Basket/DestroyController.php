<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Http\Requests\Basket\StoreRequest;
use App\Http\Requests\Basket\UpdateRequest;
use App\Models\Basket;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Product;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class DestroyController extends Controller
{
    public function __invoke(Basket $basket)
    {
        $this->authorize('view-user', auth()->user());
        try {
            $basket->delete();
            return redirect()
                ->route('basket.index')
                ->with('success', 'Товар успешно удален из корзины!');

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
