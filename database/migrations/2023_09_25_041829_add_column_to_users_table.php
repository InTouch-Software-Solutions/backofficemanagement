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
        Schema::table('users', function (Blueprint $table) {
            $table->longText('address');
            $table->string('pan');
            $table->string('gst');
            $table->string('fssai');
            $table->string('iec')->nullable();
            $table->longText('faddress');
            $table->longText('baddress');
            $table->longText('bank');
            $table->string('cperson');
            $table->bigInteger('cnumber');
            $table->string('tanno');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
