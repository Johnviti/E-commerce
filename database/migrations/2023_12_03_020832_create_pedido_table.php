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
            $table->foreignId('id_cliente')->constrained('clientes');
            $table->foreignId('id_terceiro')->constrained('terceiros');
            $table->foreignId('id_forma_pagamento')->constrained('forma_pagamentos');
            $table->foreignId('id_status_tipo')->constrained('status_tipos');
            $table->string('codigo_pedido');
            $table->string('obs')->nullable();
            $table->float('desconto')->nullable();
            $table->float('valor_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
