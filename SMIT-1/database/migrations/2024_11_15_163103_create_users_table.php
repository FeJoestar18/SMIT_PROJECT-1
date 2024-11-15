<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // Cria a coluna 'id' como chave primária autoincremento
            $table->string('nome');  // Coluna 'nome'
            $table->string('email')->unique();  // Coluna 'email' com valor único
            $table->string('senha');  // Coluna 'senha'
            $table->string('cpf')->unique();  // Coluna 'cpf' com valor único
            $table->string('telefone');  // Coluna 'telefone'
            $table->string('endereco');  // Coluna 'endereco'
            $table->timestamps();  // Cria as colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');  // Remove a tabela 'users' caso precise reverter
    }
}
