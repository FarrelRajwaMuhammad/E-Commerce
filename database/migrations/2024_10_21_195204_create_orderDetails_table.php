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
        Schema::create('orderDetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orders_id')->constrained(
                table: 'orders',
                indexName: 'orderDetails_orders_id'
            );;
            $table->foreignId('addons_id')->constrained(
                table: 'addons',
                indexName: 'orderDetails_addons_id'
            );
            $table->foreignId('products_id')->constrained(
                table: "products",
                indexName: 'orderDetails_products_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderDetails');
    }
};
