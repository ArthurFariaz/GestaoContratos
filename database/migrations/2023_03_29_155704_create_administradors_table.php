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
        Schema::create('administradors', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->foreignId('contratos_id')->constrained();
            $table->boolean('cargo'); // 0 -> fiscal .. 1 -> gestor
            $table->string('cpf');
            $table->string('contato');
            $table->string('nome');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradors');
    }
};