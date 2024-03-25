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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('reference')->unique();
            $table->string('slug');
            $table->unsignedInteger('views')->default(0);
            $table->string('title');
            $table->float('regular_price');
            $table->float('discount_price');
            $table->string('thumbnail');
            $table->string('cover_images');
            $table->string('attachment');
            $table->text('description');
            $table->enum('status', ['review', 'published', 'witheld'])->default('review');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
