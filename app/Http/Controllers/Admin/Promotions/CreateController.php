<?php

namespace App\Http\Controllers\Admin\Promotions;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.promotions.create');
    }
}
