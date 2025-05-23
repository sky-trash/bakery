<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        DB::table('orders')->where('id', $id)->update([
            'status' => $request->input('status'),
        ]);

        return redirect()->route('admin.orders.index')->with('success', 'Статус заказа обновлён');
    }
}
