<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->index('order_id', 'order_products_order_id_idx');
            $table->foreign('order_id', 'order_products_order_id_fk')->on('orders')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('product_id');
            $table->index('product_id', 'order_products_product_id_idx');
            $table->foreign('product_id', 'order_products_product_id_fk')->on('products')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('quantity')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
