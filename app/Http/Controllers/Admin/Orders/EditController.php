<?php

namespace App\Http\Controllers\Admin\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $order = DB::table('orders')->where('id', $id)->first();
        return view('admin.orders.edit', compact('order'));
    }
}
