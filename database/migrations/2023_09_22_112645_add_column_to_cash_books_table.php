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
        Schema::table('cash_books', function (Blueprint $table) {
            $table->unsignedBigInteger('reason')->after('date');
            $table->foreign('reason')->references('id')->on('expenses_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cash_books', function (Blueprint $table) {
            //
        });
    }
};
