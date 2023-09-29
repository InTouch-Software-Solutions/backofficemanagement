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
        Schema::table('brokerage_bills', function (Blueprint $table) {
            $table->unsignedBigInteger('purchaser')->after('contractdate');
            $table->unsignedBigInteger('seller')->after('purchaser');
            $table->foreign('purchaser')->references('id')->on('contract_notes');
            $table->foreign('seller')->references('id')->on('contract_notes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('brokerage_bills', function (Blueprint $table) {
            //
        });
    }
};
