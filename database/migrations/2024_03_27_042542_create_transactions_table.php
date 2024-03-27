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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('tracking_id')->nullable();
            $table->string('state')->nullable();
            $table->string('provider')->nullable();
            $table->string('value')->nullable();
            $table->string('net_amount')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('api_ref')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('currency')->nullable();
            $table->string('failed_reason')->nullable();
            $table->string('failed_code')->nullable();
            $table->string('charges')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
