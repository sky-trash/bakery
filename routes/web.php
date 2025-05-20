<?php

use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Home'], function () {
    Route::get('/', IndexController::class)->name('home.index');
    Route::post('/home', StoreController::class)->name('home.store');
});

Route::group(['namespace' => 'App\Http\Controllers\About'], function () {
    Route::get('/about', IndexController::class)->name('about.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Catalog'], function () {
    Route::get('/catalogs', IndexController::class)->name('catalogs.index');// Вывод всех товаров
    Route::post('/catalogs', StoreController::class)->name('catalogs.store'); // Само добавление товара
    Route::get('/catalogs/{product}', ShowController::class)->name('catalogs.show'); // Вывод оперделенного товара
});

Route::group(['namespace' => 'App\Http\Controllers\Basket', 'middleware' => 'user'], function () {
    Route::get('/baskets', IndexController::class)->name('basket.index');// Вывод всех заказов
    Route::post('/baskets', StoreController::class)->name('basket.store'); // Само добавление отзыва
    Route::put('/baskets/{basket}', UpdateController::class)->name('basket.update'); // Само добавление отзыва
    Route::delete('/baskets/{basket}', DestroyController::class)->name('basket.destroy'); // Само добавление отзыва
});

Route::group(['namespace' => 'App\Http\Controllers\Contact'], function () {
    Route::get('/contact', IndexController::class)->name('contact.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Articles'], function () {
    Route::get('/articles', IndexController::class)->name('articles.index');
    Route::get('/articles/{article}', ShowController::class)->name('articles.show');
});

Route::get('/reviews', 'App\Http\Controllers\Reviews\IndexController@__invoke')->name('reviews.index');

Route::middleware('auth')->group(function () {
    Route::get('/reviews/create', 'App\Http\Controllers\Reviews\CreateController@__invoke')->name('reviews.create');
    Route::post('/reviews', 'App\Http\Controllers\Reviews\StoreController@__invoke')->name('reviews.store');
});

Route::group(['namespace' => 'App\Http\Controllers\Cabinet', 'middleware' => 'user'], function () {
    Route::get('/cabinet', IndexController::class)->name('cabinet.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'user'], function () {
        Route::get('/admin/', IndexController::class)->name('admin.user.index'); // Вывод всех отзывов
    });
    Route::group(['namespace' => 'statistics'], function () {
        Route::get('/admin/statistics', IndexController::class)->name('admin.statistics.index'); // Вывод всех отзывов
    });
});


use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::get('/test/{email}', function ($email, Request $request) {
    $text = $request->query('text', 'Привет! Это тестовое письмо по умолчанию.');

    Mail::raw($text, function ($message) use ($email) {
        $message->to($email)
                ->subject('Тестовая отправка');
    });

    return "Письмо отправлено на $email с текстом: $text";
});
