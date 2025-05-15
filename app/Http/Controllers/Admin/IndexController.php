<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $this->authorize('view-admin', auth()->user()); // Пример блокировки пользователя
        return view('admin.index');
    }
}
