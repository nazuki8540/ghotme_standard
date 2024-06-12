<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();                // Cria uma coluna de autoincremento chamada 'id' (chave primária)
            $table->string('name');       // Cria uma coluna do tipo string chamada 'name' para o nome do produto
            $table->text('description');   // Cria uma coluna do tipo text chamada 'description' para a descrição do produto
            $table->decimal('price', 8, 2); // Cria uma coluna decimal chamada 'price' com 8 dígitos no total e 2 casas decimais
            $table->integer('quantity');   // Cria uma coluna do tipo inteiro chamada 'quantity' para a quantidade do produto em estoque
            $table->unsignedBigInteger('category_id'); // Cria a coluna 'category_id' como chave estrangeira (unsignedBigInteger)
            
            // Define a chave estrangeira 'category_id' referenciando a coluna 'id' da tabela 'categories'
            $table->foreign('category_id')->references('id')->on('categories'); 
        
            $table->timestamps();          // Cria as colunas 'created_at' e 'updated_at' para registrar os timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
