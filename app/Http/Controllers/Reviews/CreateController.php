<?php

namespace App\Http\Controllers\Reviews;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('reviews.create');
    }
}