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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users')->default(null)->onDelete('cascade');
            $table->string('quantidade', 200)->nullable();
            $table->foreignId('produto_id')->constrained('produtos')->default(null)->onDelete('cascade');
            $table->foreignId('forma_pagamento_id')->constrained('forma_pagamento_tipo_cartaos')->default(null)->onDelete('cascade');
            $table->foreignId('cartao_id')->constrained('cartaos')->default(null)->onDelete('cascade');
            $table->foreignId('status_id')->constrained('statuses')->default(null)->onDelete('cascade');
            $table->string('observacao', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
