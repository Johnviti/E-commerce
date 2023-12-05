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
        Schema::create('terceiros', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj');
            $table->string('nome');
            $table->string('cep');
            $table->string('endereco');
            $table->string('fone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terceiro');
    }
};
