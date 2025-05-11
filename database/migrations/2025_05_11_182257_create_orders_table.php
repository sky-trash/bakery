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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->index('user_id', 'order_user_idx');
            $table->foreign('user_id', 'order_user_fk')->on('users')->references('id')->onDelete('cascade');

            $table->string('order_number');
            $table->unsignedBigInteger('total_price');
            $table->timestamp('delivered_at')->nullable();
            $table->string('status')->default('новый');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
