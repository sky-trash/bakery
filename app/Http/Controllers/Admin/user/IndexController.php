<?php

namespace App\Http\Controllers\Admin\user;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $this->authorize('view-admin', auth()->user()); // Пример блокировки пользователя
        return view('admin.user.index');
    }
}
