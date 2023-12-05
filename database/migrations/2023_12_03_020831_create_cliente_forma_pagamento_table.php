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
       
        Schema::create('cliente_forma_pagamento', function (Blueprint $table) {
            $table->foreignId('id_cliente')->constrained('clientes');
            $table->foreignId('id_forma_pagamento')->constrained('forma_pagamentos');
            $table->string('numero');
            $table->date('validade');
            $table->string('nome');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_forma_pagamento');
    }
};
