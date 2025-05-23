<?php

use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Home'], function () {
    Route::get('/', IndexController::class)->name('home.index');
    Route::post('/home', StoreController::class)->name('home.store');
});

Route::group(['namespace' => 'App\Http\Controllers\About'], function () {
    Route::get('/about', IndexController::class)->name('about.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Catalog'], function () {
    Route::get('/catalogs', IndexController::class)->name('catalogs.index');
    Route::post('/catalogs', StoreController::class)->name('catalogs.store');
    Route::get('/catalogs/{product}', ShowController::class)->name('catalogs.show');
});

Route::group(['namespace' => 'App\Http\Controllers\Basket', 'middleware' => 'user'], function () {
    Route::get('/baskets', IndexController::class)->name('basket.index');
    Route::post('/baskets', StoreController::class)->name('basket.store');
    Route::put('/baskets/{basket}', UpdateController::class)->name('basket.update');
    Route::delete('/baskets/{basket}', DestroyController::class)->name('basket.destroy');
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
    Route::post('/cabinet', StoreController::class)->name('cabinet.store');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'statistics'], function () {
        Route::get('/admin/statistics', IndexController::class)->name('admin.statistics.index');
    });
    Route::group(['namespace' => 'product'], function () {
        Route::get('/admin/products', IndexController::class)->name('admin.products.index');
        Route::get('/admin/products/create', CreateController::class)->name('admin.products.create');
        Route::post('/admin/products', StoreController::class)->name('admin.products.store');
        Route::get('/admin/products/{product}/edit', EditController::class)->name('admin.products.edit');
        Route::patch('/admin/products/{product}', UpdateController::class)->name('admin.products.update');
        Route::delete('/admin/products/{product}', DestroyController::class)->name('admin.products.destroy');
    });
    Route::group(['namespace' => 'contact'], function () {
        Route::get('/admin/', IndexController::class)->name('admin.contacts.index');
        Route::get('/admin/contacts/{contact}/edit', EditController::class)->name('admin.contacts.edit');
        Route::patch('/admin/contacts/{contact}', UpdateController::class)->name('admin.contacts.update');
    });
    Route::group(['namespace' => 'article'], function () {
        Route::get('/admin/articles', IndexController::class)->name('admin.articles.index');
        Route::get('/admin/articles/create', CreateController::class)->name('admin.articles.create');
        Route::post('/admin/articles', StoreController::class)->name('admin.articles.store');
        Route::get('/admin/articles/{article}/edit', EditController::class)->name('admin.articles.edit');
        Route::patch('/admin/articles/{article}', UpdateController::class)->name('admin.articles.update');
        Route::delete('/admin/articles/{article}', DestroyController::class)->name('admin.articles.destroy');
    });
    Route::group(['namespace' => 'reviews'], function () {
        Route::get('/admin/reviews', IndexController::class)->name('admin.reviews.index');
        Route::delete('/admin/reviews/{review}', DestroyController::class)->name('admin.reviews.destroy');
    });

    Route::group(['namespace' => 'orders'], function () {
        Route::get('/admin/orders', IndexController::class)->name('admin.orders.index');
        Route::get('/admin/orders/{id}/edit', EditController::class)->name('admin.orders.edit');
        Route::patch('/admin/orders/{id}', [\App\Http\Controllers\Admin\Orders\UpdateController::class, '__invoke'])->name('admin.orders.update');
        Route::delete('/admin/orders/{id}', [\App\Http\Controllers\Admin\Orders\DestroyController::class, '__invoke'])->name('admin.orders.destroy');
    });

    Route::group(['namespace' => '\App\Http\Controllers\Admin\Promotions'], function () {
        Route::get('/admin/promotions', \IndexController::class)->name('admin.promotions.index');
        Route::get('/admin/promotions/create', CreateController::class)->name('admin.promotions.create');
        Route::post('/admin/promotions', StoreController::class)->name('admin.promotions.store');
        Route::patch('/admin/promotions/{id}', UpdateController::class)->name('admin.promotions.update');
        Route::delete('/admin/promotions/{id}', DestroyController::class)->name('admin.promotions.destroy');
    });
});


use App\Http\Controllers\SubscriptionController;

Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->middleware('auth')->name('subscribe');
Route::post('/unsubscribe', [SubscriptionController::class, 'unsubscribe'])->middleware('auth')->name('unsubscribe');


Route::get('/test/{email}', function ($email, Request $request) {
    $text = $request->query('text', 'Привет! Это тестовое письмо по умолчанию.');

    Mail::raw($text, function ($message) use ($email) {
        $message->to($email)
            ->subject('Тестовая отправка');
    });

    return "Письмо отправлено на $email с текстом: $text";
});
Route::post('/unsubscribe', [SubscriptionController::class, 'unsubscribe'])->middleware('auth')->name('unsubscribe');
