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
        Schema::create('firms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('pan')->nullable();
            $table->string('tanno')->nullable();
            $table->string('fssai')->nullable();
            $table->string('phone')->nullable();
            $table->string('gst')->nullable();
            $table->string('iec')->nullable();
            $table->longText('address')->nullable();
            $table->longText('bank')->nullable();
            $table->string('comm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('firms');
    }
};
