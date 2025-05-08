<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReviewsController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['namespace' => 'App\Http\Controllers\Home'], function () {
    Route::get('/', IndexController::class)->name('home.index');
    Route::post('/{home}', StoreController::class)->name('home.store'); // Само добавление отзыва
});

Route::group(['namespace' => 'App\Http\Controllers\About'], function () {
    Route::get('/about', IndexController::class)->name('about.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Catalog'], function () {
    Route::get('/catalogs', IndexController::class)->name('catalogs.index');// Вывод всех товаров
    Route::get('/catalogs/catalog', CreateController::class)->name('catalogs.create'); // Страница добавления товара
    Route::post('/catalogs', StoreController::class)->name('catalogs.store'); // Само добавление товара
    Route::get('/catalogs/{catalog}', ShowController::class)->name('catalogs.show'); // Вывод оперделенного товара
});

Route::group(['namespace' => 'App\Http\Controllers\Order'], function () {
    Route::get('/orders', IndexController::class)->name('orders.index');// Вывод всех заказов
    Route::get('/orders/order', CreateController::class)->name('orders.create'); // Страница добавления отзывов
    Route::post('/orders', StoreController::class)->name('orders.store'); // Само добавление отзыва
});

Route::group(['namespace' => 'App\Http\Controllers\Contact'], function () {
    Route::get('/contact', IndexController::class)->name('contact.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Articles'], function () {
    Route::get('/articles', IndexController::class)->name('articles.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Reviews'], function () {
    Route::get('/reviews', IndexController::class)->name('reviews.index'); // Вывод всех отзывов
    Route::get('/reviews/create', CreateController::class)->name('reviews.create'); // Страница добавления отзывов
    Route::post('/reviews', StoreController::class)->name('reviews.store'); // Само добавление отзыва
});

