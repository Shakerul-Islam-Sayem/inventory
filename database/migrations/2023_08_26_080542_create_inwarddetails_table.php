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
        Schema::create('inwarddetails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("inward_id")->unsigned();
            $table->foreign('inward_id')->references('id')->on('inwards')->onDelete("cascade");
            $table->bigInteger("product_id")->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete("cascade");
            $table->integer('quantity')->nullable();
            $table->decimal('purchase_price', 8, 2);
            $table->decimal('sale_price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inwarddetails');
    }
};
