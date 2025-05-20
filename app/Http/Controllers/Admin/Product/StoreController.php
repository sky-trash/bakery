<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\CreateRequest;
use App\Models\Product;
use App\Models\Sales_statistics;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(CreateRequest $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $data = $request->validated();

                if ($request->hasFile('image')) {
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $uniqueName = Str::uuid() . '.' . $extension;

                    $request->file('image')->storeAs('products', $uniqueName, 'public');

                    $data['image'] = $uniqueName;
                }

                Product::create($data);
            });

            return redirect()
                ->route('admin.products.index')
                ->with('success', 'Продукт успешно добавлен!');

        } catch (Exception $e) {
            return redirect()
                ->route('admin.products.create')
                ->with([
                    'error' => 'При добавление произошла ошибка, обратитесь пожалуйста в поддержку.',
                    'telegram_link' => 'https://t.me/user_Kirillka',
                    'telegram_text' => 'Telegram - @user_Kirillka'
                ]);
        }
    }
}
