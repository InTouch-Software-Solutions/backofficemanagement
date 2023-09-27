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
        Schema::create('brokerage_bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contractno');
            $table->foreign('contractno')->references('id')->on('contract_notes');
            $table->string('weight');
            $table->string('tanker');
            $table->string('transporter');
            $table->string('agent');
            $table->string('invoice');
            $table->string('pono');
            $table->string('comm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brokerage_bills');
    }
};
