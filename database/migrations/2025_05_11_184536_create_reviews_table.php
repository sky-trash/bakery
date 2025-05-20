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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->index('user_id', 'review_user_idx');
            $table->foreign('user_id', 'review_user_fk')->on('users')->references('id')->onDelete('cascade');
            $table->tinyInteger('rating')->unsigned()->default(5); // Рейтинг от 1 до 5
            $table->string('title');
            $table->text('description');
            $table->timestamp('date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
