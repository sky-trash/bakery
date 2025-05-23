<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        DB::table('orders')->where('id', $id)->delete();

        return redirect()->route('admin.orders.index')->with('success', 'Заказ успешно удалён');
    }
}
