<?php

namespace App\Http\Controllers\Admin\Statistics;

use App\Http\Controllers\Controller;
use App\Models\Sales_statistics;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $sold = Sales_statistics::count();
        $userOnline = User::where('online', true)->count();
        return view('admin.statistics.index', compact('sold', 'userOnline'));
    }
}
