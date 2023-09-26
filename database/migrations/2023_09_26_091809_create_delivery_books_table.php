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
        Schema::create('delivery_books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orderno');
            $table->foreign('orderno')->references('id')->on('contract_notes');
            $table->date('date');
            $table->string('purchaser');
            $table->string('seller');
            $table->string('commodity');
            $table->string('quantity');
            $table->string('rate');
            $table->date('deliverydate');
            $table->string('charge');
            $table->string('gst');
            $table->string('version');
            $table->string('deliver_quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_books');
    }
};
