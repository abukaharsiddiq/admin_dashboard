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
        Schema::create('sale_details', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('order_no');
            $table->unsignedBigInteger('order_id');
            $table->integer('product_id');
            $table->float('unit_price');
            $table->integer('quantity')->nullable();
            $table->string('weight')->nullable();
            $table->float('unit_total');
            $table->string('date');
            $table->string('month_year');
            $table->foreign('order_id')->references('id')->on('sales')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_details');
    }
};
