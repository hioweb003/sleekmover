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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->string('status')->default('pending');
            $table->integer('item_count');
            $table->boolean('is_paid')->default(false);
            $table->string('order_type')->default('normal');
            $table->string('payment_method');
            $table->string('paymentref');
            $table->string('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('grand_total');
            $table->string('sub_total');
            $table->string('shipping_cost');
            $table->string('shipping_name');
            $table->string('shipping_email');
            $table->string('shipping_address'); 
            $table->string('shipping_phone');
            $table->string('shipping_country');
            $table->string('shipping_state');
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
