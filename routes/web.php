<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CatalogsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ReviewsController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/{home}', [HomeController::class, 'store'])->name('home.store'); // Само добавление отзыва


Route::get('/about', [AboutController::class, 'index'])->name('about.index');


Route::get('/catalogs', [CatalogsController::class, 'index'])->name('catalogs.index');// Вывод всех товаров
Route::get('/catalogs/catalog', [CatalogsController::class, 'create'])->name('catalogs.create'); // Страница добавления товара
Route::post('/catalogs', [CatalogsController::class, 'store'])->name('catalogs.store'); // Само добавление товара
Route::get('/catalogs/{catalog}', [CatalogsController::class, 'show'])->name('catalogs.show'); // Вывод оперделенного товара


Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index');// Вывод всех заказов
Route::get('/orders/order', [OrdersController::class, 'create'])->name('orders.create'); // Страница добавления отзывов
Route::post('/orders', [OrdersController::class, 'store'])->name('orders.store'); // Само добавление отзыва


Route::get('/contact', [ContactsController::class, 'index'])->name('contact.index');


Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');


Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews.index'); // Вывод всех отзывов
Route::get('/reviews/create', [ReviewsController::class, 'create'])->name('reviews.create'); // Страница добавления отзывов
Route::post('/reviews', [ReviewsController::class, 'store'])->name('reviews.store'); // Само добавление отзыва


