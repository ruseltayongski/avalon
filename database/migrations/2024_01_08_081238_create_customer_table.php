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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('email_one')->nullable()->unique();
            $table->string('email_two')->nullable()->unique();
            $table->string('billing_address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('post_code')->nullable();
            $table->string('payment_type')->nullable();
            $table->bigInteger('processed_by')->nullable();
            $table->bigInteger('service_id')->nullable();
            $table->string('status')->nullable();
            $table->decimal('subtotal', 20, 2)->nullable();
            $table->decimal('total_amount', 20, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
