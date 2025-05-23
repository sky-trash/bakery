<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sales_statistics;
use App\Models\User;
use Exception;

class DestroyController extends Controller
{
    public function __invoke(Product $product)
    {
        try {


        $product->delete();
        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Продукт успешно удален!');

    } catch (Exception $e) {
return redirect()
->route('admin.products.index')
->with([
'error' => 'При удалении произошла ошибка, обратитесь пожалуйста в поддержку.',
'telegram_link' => 'https://t.me/user_Kirillka',
'telegram_text' => 'Telegram - @user_Kirillka'
]);
}


    }
}
