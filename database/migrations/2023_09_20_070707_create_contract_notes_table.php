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
        Schema::create('contract_notes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->bigInteger('orderno');
            $table->string('purchaser');
            $table->string('seller');
            $table->string('commodity');
            $table->string('quantity');
            $table->string('rate');
            $table->string('time');
            $table->string('condition');
            $table->integer('charge');
            $table->string('gst');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_notes');
    }
};
