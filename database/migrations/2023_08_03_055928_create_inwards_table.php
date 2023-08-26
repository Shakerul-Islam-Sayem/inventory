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
        Schema::create('inwards', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("supplier_id")->unsigned();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete("cascade");
            $table->bigInteger('grosstotal')->nullable();
            $table->bigInteger('discount')->nullable();
            $table->bigInteger('nettotal')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('trxid')->nullable();
            $table->string('comment')->nullable();
            $table->date('date_received')->nullable();
            $table->string('invoice_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inwards');
    }
};
