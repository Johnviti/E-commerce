<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::create('produtos_estoque', function (Blueprint $table) {
            $table->unsignedBigInteger('id_produto');
            $table->unsignedBigInteger('id_fornecedor');
            $table->integer('quantidade');
            $table->float('valor_unitario');
            $table->timestamps();
        
            $table->foreign('id_produto')->references('id')->on('produtos');
            $table->foreign('id_fornecedor')->references('id')->on('fornecedores');
        });
        
        Schema::create('pedido_terceiro_produto', function (Blueprint $table) {
            $table->foreignId('id_pedido_terceiro')->constrained('pedido_terceiro');
            $table->foreignId('id_produto')->constrained('produtos');
            $table->float('quantidade');
            $table->float('valor_unitario');
            $table->float('desconto')->nullable();
            $table->float('valor_total');
            $table->timestamps();
        });
        
        Schema::create('terceiro_produto', function (Blueprint $table) {
            $table->unsignedBigInteger('id_terceiro');
            $table->unsignedBigInteger('id_produto');
            $table->timestamps();
        
            $table->foreign('id_terceiro')->references('id')->on('terceiros');
            $table->foreign('id_produto')->references('id')->on('produtos');
        });
        
        Schema::create('produto_status', function (Blueprint $table) {
            $table->unsignedBigInteger('id_produto');
            $table->unsignedBigInteger('id_status_tipo');
            $table->timestamps();
        
            $table->foreign('id_produto')->references('id')->on('produtos');
            $table->foreign('id_status_tipo')->references('id')->on('status_tipos');
        });

        Schema::create('categoria_produtos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('observacao')->nullable();
            $table->timestamps();
        });

        

        

        

       

        

       

        

        Schema::create('pedido_produtos', function (Blueprint $table) {
            $table->foreignId('id_pedido')->constrained('pedidos');
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
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedores');
        Schema::dropIfExists('produtos');
        Schema::dropIfExists('categoria_produtos');
        Schema::dropIfExists('fornecedor_produto');
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('forma_pagamentos');
        Schema::dropIfExists('cliente_forma_pagamento');
        Schema::dropIfExists('terceiros');
        Schema::dropIfExists('status_tipos');
        Schema::dropIfExists('pedidos');
        Schema::dropIfExists('pedido_produtos');
    }
}