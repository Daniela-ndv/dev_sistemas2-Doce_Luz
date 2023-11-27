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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->foreignId('tipo_id')->constrained('tipo_produtos')->default(null)->onDelete('cascade');
            $table->string('codigo', 40)->nullable();
            $table->decimal('valorCusto', 6, 2);
            $table->decimal('valorVenda', 6, 2);
            $table->string('descricao', 200)->nullable();
            $table->string('imagem', 200);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
