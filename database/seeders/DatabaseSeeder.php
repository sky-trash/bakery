<?php

namespace Database\Seeders;

use App\Models\Basket;
use App\Models\Contact;
use App\Models\News;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Review;
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
        News::factory(6)->create();
        Promotion::factory(6)->create();
        Contact::factory(1)->create();
        User::factory(5)->create();
        Product::factory(6)->create();
        Review::factory(20)->create();
        Basket::factory(10)->create();
        Order::factory(50)->create();
        Order_product::factory(50)->create();


//        Promotion::factory()->create([


//        ]);
    }
}
