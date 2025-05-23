<?php

namespace App\Http\Controllers\Admin\Reviews;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Product;
use App\Models\Review;
use App\Models\Sales_statistics;
use App\Models\User;
use Exception;

class DestroyController extends Controller
{
    public function __invoke(Review $review)
    {
        try {


            $review->delete();
            return redirect()
                ->route('admin.reviews.index')
                ->with('success', 'Отзыв успешно удален!');

        } catch (Exception $e) {
            return redirect()
                ->route('admin.reviews.index')
                ->with([
                    'error' => 'При удалении произошла ошибка, обратитесь пожалуйста в поддержку.',
                    'telegram_link' => 'https://t.me/user_Kirillka',
                    'telegram_text' => 'Telegram - @user_Kirillka'
                ]);
        }


    }
}
