<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscriptions_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->index('user_id', 'subscriptions_users_user_id_idx');
            $table->foreign('user_id', 'subscriptions_users_user_id_fk')->on('users')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('subscriptions_id');
            $table->index('subscriptions_id', 'subscriptions_users_subscriptions_id_idx');
            $table->foreign('subscriptions_id', 'subscriptions_users_subscriptions_id_fk')->on('subscriptions')->references('id')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions_users');
    }
};
