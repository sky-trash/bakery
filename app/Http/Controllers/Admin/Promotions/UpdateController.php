<?php

namespace App\Http\Controllers\Admin\Promotions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
        ]);

        $promotion = DB::table('promotions')->where('id', $id)->first();

        if (!$promotion) {
            abort(404);
        }

        $uniqueName = $promotion->image;

        if ($request->hasFile('image')) {
            // Удаляем старое изображение, если есть
            if ($promotion->image && Storage::disk('public')->exists($promotion->image)) {
                Storage::disk('public')->delete($promotion->image);
            }

            $extension = $request->file('image')->getClientOriginalExtension();
            $uniqueName = Str::uuid() . '.' . $extension;

            $request->file('image')->storeAs('promotions', $uniqueName, 'public');
        }

        DB::table('promotions')->where('id', $id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'image' => $uniqueName,
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.promotions.index')->with('success', 'Акция обновлена');
    }
}
