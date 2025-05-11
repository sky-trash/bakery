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
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->index('user_id', 'basket_user_idx');
            $table->foreign('user_id', 'basket_user_fk')->on('users')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('product_id');
            $table->index('product_id', 'basket_product_idx');
            $table->foreign('product_id', 'basket_product_fk')->on('products')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('quantity')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baskets');
    }
};
