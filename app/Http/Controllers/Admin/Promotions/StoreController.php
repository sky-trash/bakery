<?php

namespace App\Http\Controllers\Admin\Promotions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'image' => 'nullable|image|max:2048',
        ]);

        $uniqueName = null;
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $uniqueName = Str::uuid() . '.' . $extension;

            $request->file('image')->storeAs('promotions', $uniqueName, 'public');
        }

        DB::table('promotions')->insert([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'image' => $uniqueName,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.promotions.index')->with('success', 'Акция добавлена');
    }
}
