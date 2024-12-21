<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id');
            $table->string('purchase_no');
            $table->unsignedBigInteger('purchase_id');
            $table->integer('product_id');
            $table->float('unit_price');
            $table->integer('quantity')->nullable();
            $table->string('weight')->nullable();
            $table->float('unit_total');
            $table->string('date');
            $table->string('month_year');
            $table->timestamps();
            $table->foreign('purchase_id')->references('id')->on('purchases')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_details');
    }
};
