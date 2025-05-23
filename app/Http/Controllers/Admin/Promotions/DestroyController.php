<?php

namespace App\Http\Controllers\Admin\Promotions;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        $promotion = DB::table('promotions')->where('id', $id)->first();

        if (!$promotion) {
            abort(404);
        }

        // Удаляем файл изображения если есть
        if ($promotion->image && Storage::disk('public')->exists($promotion->image)) {
            Storage::disk('public')->delete($promotion->image);
        }

        DB::table('promotions')->where('id', $id)->delete();

        return redirect()->route('admin.promotions.index')->with('success', 'Акция удалена');
    }
}
