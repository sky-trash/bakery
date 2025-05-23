<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Article\UpdateRequest;
use App\Models\Article;
use App\Models\Product;
use App\Models\Sales_statistics;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Article $article)
    {

        try {

            DB::transaction(function () use ($request, $article) {
                $data = $request->validated();

                if ($request->hasFile('image')) {
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $uniqueName = Str::uuid() . '.' . $extension;

                    $request->file('image')->storeAs('article', $uniqueName, 'public');

                    $data['image'] = $uniqueName;
                }

                $article->update($data);

            });

            return redirect()->route('admin.articles.edit', $article->id)->with('success', 'Статья успешно обновлен!');
        } catch (Exception $e) {
            return redirect()
                ->route('admin.articles.edit', $article->id)
                ->with([
                    'error' => 'При обновлении произошла ошибка, обратитесь пожалуйста в поддержку.',
                    'telegram_link' => 'https://t.me/user_Kirillka',
                    'telegram_text' => 'Telegram - @user_Kirillka'
                ]);
        }
    }
}
