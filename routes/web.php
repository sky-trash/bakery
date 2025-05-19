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

Route::group(['namespace' => 'App\Http\Controllers\Reviews'], function () {
    Route::get('/reviews', IndexController::class)->name('reviews.index'); // Вывод всех отзывов
    Route::get('/reviews/create', CreateController::class)->name('reviews.create'); // Страница добавления отзывов
    Route::post('/reviews', StoreController::class)->name('reviews.store'); // Само добавление отзыва
});

Route::group(['namespace' => 'App\Http\Controllers\Cabinet', 'middleware' => 'user'], function () {
    Route::get('/cabinet', IndexController::class)->name('cabinet.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'user'], function () {
        Route::get('/admin', IndexController::class)->name('admin.user.index'); // Вывод всех отзывов
    });

});
