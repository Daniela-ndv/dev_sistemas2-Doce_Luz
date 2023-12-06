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
        Schema::create('cartaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_id')->constrained('forma_pagamento_tipo_cartaos')->default(null)->onDelete('cascade');
            $table->foreignId('usuario_id')->constrained('users')->default(null)->onDelete('cascade');
            $table->string('nomeTitular', 100);
            $table->integer('numeroCartao');
            $table->date('dataValidade');
            $table->string('codigoSeguranca', 60);
            $table->string('imagem', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartaos');
    }
};
