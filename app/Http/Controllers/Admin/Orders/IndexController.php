<?php

namespace App\Http\Controllers\Admin\Orders;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController
{
    public function __invoke()
    {
        $orders = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.*', 'users.email')
            ->paginate(15); // здесь можно указать любое число записей на страницу

        return view('admin.orders.index', compact('orders'));
    }

}
