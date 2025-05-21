<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Basket;
use App\Models\Contact;
use App\Models\News;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Review;
use App\Models\Subscription;
use App\Models\Type;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        News::factory(50)->create();
        Article::factory(50)->create();
        Promotion::factory(50)->create();
        Contact::factory(1)->create();
        User::factory(5)->create();
        Type::insert([
            ['id' => 1, 'type' => 'Булки', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'type' => 'Сладости', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'type' => 'Мясные', 'created_at' => now(), 'updated_at' => now()],
        ]);
        Product::factory(50)->create();
        Review::factory(20)->create();
        Basket::factory(100)->create();
        Order::factory(50)->create();
        Order_product::factory(50)->create();
        Subscription::insert([
            ['id' => 1, 'subscriptions' => 'news', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'subscriptions' => 'promotions', 'created_at' => now(), 'updated_at' => now()],
        ]);



//        Promotion::factory()->create([


//        ]);
    }
}
