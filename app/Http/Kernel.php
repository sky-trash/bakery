<?php

namespace App\Http;

use App\Http\Middleware\AdminPanelMiddleware;
use App\Http\Middleware\UserPanelMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'admin' => \App\Http\Middleware\AdminPanelMiddleware::class,
        'user' => \App\Http\Middleware\UserPanelMiddleware::class,
    ];
}
