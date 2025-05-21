<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Product;
use App\Models\Sales_statistics;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {

        try {

            DB::transaction(function () use ($request, $product) {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $uniqueName = Str::uuid() . '.' . $extension;

            $request->file('image')->storeAs('products', $uniqueName, 'public');

            $data['image'] = $uniqueName;
        }

        $product->update($data);

            });

        return redirect()->route('admin.products.edit', $product->id)->with('success', 'Продукт успешно обновлен!');
        } catch (Exception $e) {
            return redirect()
                ->route('admin.products.edit', $product->id)
                ->with([
                    'error' => 'При обновлении произошла ошибка, обратитесь пожалуйста в поддержку.',
                    'telegram_link' => 'https://t.me/user_Kirillka',
                    'telegram_text' => 'Telegram - @user_Kirillka'
                ]);
        }
    }
}
