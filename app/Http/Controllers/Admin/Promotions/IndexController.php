<?php

namespace App\Http\Controllers\Admin\Promotions;

use App\Http\Controllers\Controller;
use App\Models\Promotion;

use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {
        $promotions = Promotion::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.promotions.index', compact('promotions'));
    }
}