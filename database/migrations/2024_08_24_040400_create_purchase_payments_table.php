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
        Schema::create('purchase_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id');
            $table->unsignedBigInteger('purchase_id');
            $table->string('purchase_no');
            $table->float('paid_amount');
            $table->float('due_amount');
            $table->string('payment_type')->comment('bank or cash');
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
        Schema::dropIfExists('purchase_payments');
    }
};
