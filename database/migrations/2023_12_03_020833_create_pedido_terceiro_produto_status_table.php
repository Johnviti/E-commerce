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
        Schema::create('pedido_terceiro_produto', function (Blueprint $table) {
            $table->foreignId('id_pedido_terceiro')->constrained('pedido_terceiro');
            $table->foreignId('id_produto')->constrained('produtos');
            $table->float('quantidade');
            $table->float('valor_unitario');
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
        Schema::dropIfExists('pedido_terceiro_produto_status');
    }
};
