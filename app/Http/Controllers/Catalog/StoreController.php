<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalog\CreateRequest;
use App\Models\Basket;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __invoke(CreateRequest $request)
    {
        try {
            $data = $request->validated();
            $data['user_id'] = auth()->id();
            Basket::create($data);

            return redirect()
                ->route('basket.index')
                ->with('success', 'Товар успешно добавлен в корзину!');
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
