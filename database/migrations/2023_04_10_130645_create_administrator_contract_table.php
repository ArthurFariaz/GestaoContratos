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
        Schema::create('administrator_contract', function (Blueprint $table) {
            $table->unsignedBigInteger('contract_id');
            $table->foreign('contract_id')->references('id')->on('contracts');
            $table->unsignedBigInteger('administrator_id');
            $table->foreign('administrator_id')->references('id')->on('administrators');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrator_contract');
    }
};
